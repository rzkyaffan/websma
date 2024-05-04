<?php
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

$prestasi = query("SELECT * FROM prestasi ORDER BY no DESC");

    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {
            echo
            "
        <script>
        alert('input successful');
        document.location.href = '/smanusa'
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
            <h1>Welcome, Admin</h1>
        </header>

        <h1>Recently Event & Galeri</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id">
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" required>
            </li>
            <button type="submit" name="submit">Tambahkan</button>
        </form>

        <h1>Priview Data Prestasi Siswa</h1>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($prestasi as $pres) : ?>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $pres["gambar"]?>" alt="gambar prestasi"></td>
                    <td><?= $pres["judul"]; ?></td>
                    <td><?= $pres["keterangan"]; ?></td>
                    <td>
                        <button type="submit" class="btn danger" onclick="return confirm(`apakah anda yakin? \ntindakan ini tidak dapat diurungkan`)"><a href="hapus.php?id=<?= $pres["no"] ?>&data2=<?= $pres["gambar"] ?>" class="danger">Hapus</a></button>
                    </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </table>
</main>

    <script src="assets/js/main.js"></script>
</body>

</html>