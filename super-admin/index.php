<?php
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

$posts = query("SELECT * FROM post ORDER BY id DESC");
    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
            echo
            "
        <script>
        alert('input successful');
        </script>
            ";
        } else {
            echo
            "
        <script>
        alert('input gagal, coba lagi nanti);
        </script>
            ";
        }
    } 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | SManusArt</title>
    <style>
        * {
            border: none;
            font-family: 'poppins', sans-serif;
        }
        body,
        main{
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        html {
            overflow-x: hidden;
        }

        body {
            background: #edeff8;
        }

        h1 {
            font-size: 1.1rem;
        }

        form {
            background: #ffffff;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            border: 1px solid grey;
            border-radius: .2rem;
            margin: auto;
            text-align: center;
            padding: 3rem 5rem;
            width: 34vw;
            align-items: center;
        }

        form li {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        form input {
            padding: .3rem;
            border-bottom: 1px solid black;
        }

        form button {
            padding: .5rem 1rem;
            background: #0070f2;
            color: #e6f0fd;
            cursor: pointer;
        }

        td,
        th {
            padding: .5rem;
        }

        table {
            padding: 2rem;
            text-align: center;
            background: #ffffff;
            border-radius: 1rem;
        }

        table tr th {
            color: #bcbac6;
        }

        table tr:nth-child(even) {
            background: #f5f7fb;
        }

        .btn {
            padding: .5rem 1rem;
            background: #0070f2;
            color: #e6f0fd;
            cursor: pointer;
        }

        .danger {
            background: #c9190b;
            color: #e6f0fd;
        }

        main {
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }
        img{
            width: 10rem;
            height: 9rem;
            object-fit: cover;
            object-position: center;
        }

        @media screen and (max-width: 700px) {
            html {
                font-size: 65%;
            }
        }
    </style>
</head>

<body>
    <main>
        <header>
            <h1>Selamat datang, Admin</h1>
            <a href="prestasi.php">Edit Prestasi</a><br>
            <a href="../">Logout</a>
        </header>

        <h1>Recently Event & Galeri</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id">
            <li>
                <label for="links">Link</label>
                <input type="text" name="links" id="links">
            </li>

            <li>
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image">
            </li>

            <li>
                <label for="caption">Keterangan</label>
                <input type="text" name="caption" id="caption">
            </li>
            <button type="submit" name="submit">Tambahkan</button>
        </form>

        <h1>Priview Data Acara Terakhir & Galeri</h1>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Tautan</th>
                <th>Gambar</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($posts as $post) : ?>
                    <td><?= $i ?></td>
                    <td><?= $post["link"]; ?></td>
                    <td><img src="../assets/img/<?= $post["image"]?>" alt="gambar-event-terakhir"></td>
                    <td><?= $post["caption"]; ?></td>
                    <td>
                        <button type="submit" class="btn danger" onclick="return confirm(`apakah anda yakin? \ntindakan ini tidak dapat diurungkan`)"><a href="delete.php?id=<?= $post["id"] ?>&data2=<?= $post["image"] ?>" class="danger">Hapus</a></button>
                    </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </table>
</main>

    <script src="assets/js/main.js"></script>
</body>

</html>