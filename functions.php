<?php
$db = mysqli_connect('localhost', 'root', '', 'admin');
$dbquery = mysqli_query($db, 'SELECT * FROM post');

function query($querysyntax)
{
    global $db;
    $result = mysqli_query($db, $querysyntax);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//Add Functions
function tambah($data)
{
    global $db;
    $link = htmlspecialchars($data["links"]);
    $caption = htmlspecialchars($data["caption"]);

    // Upload Image
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO post VALUES( 0,'$link', '$gambar', '$caption')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Upload Functions

function upload()
{
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // Cek Apakah Gambar di upload 
    if ($error === 4) {
        echo "<script>
        alert('Mohon Pilih Gambar Terlebih Dahulu !')
        </script>";
        return false;
    }

    // Cek Apakah Benar Gambar Yang Di Upload

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Hayo Mau upload Apa? :) \n yang anda upload, bukan gambar')
        </script>";
        return false;
    }

    // Cek Ukuran File
    if ($ukuranFile > 1500000) {
        echo "<script>
        alert('Ukuran Gambar Terlalu Besar, Mohon Pilih Gambar Lain')
        </script>";
        return false;
    }
    // Lolos Pengecekan Gambar Siap Upload
    // Generate Nama Random Untuk Gambarnya
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}



// Delete Functions
function delete()
{
    global $db;
    global $id;
    $image = $_GET["data2"];
    mysqli_query($db, "DELETE FROM post WHERE id = $id");
    $fileToDelete = 'assets/img/'.$image;
    if (file_exists($fileToDelete)) {
        if (unlink($fileToDelete)) {
            echo "<script>
            alert('Gambar Berhasil di hapus')
            </script>";
        } else {
            echo "<script>
            alert('Gambar gagal di hapus ! ')
            </script>";
        }
    } else {
        echo "<script>
        alert('Gambar Tidak Ditemukan')
        </script>";
    }
    return mysqli_affected_rows($db);
}


// FUNCTION UNTUK PRESTASI


$dbquery = mysqli_query($db, 'SELECT * FROM prestasi');


//Add Functions
function add($data)
{
    global $db;
    $caption = htmlspecialchars($data["keterangan"]);
    $title = htmlspecialchars($data["judul"]);

    // Upload Image
    $gambar = unggah();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO prestasi VALUES( 0, '$gambar',  '$title', '$caption')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Upload Functions

function unggah()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek Apakah Gambar di upload 
    if ($error === 4) {
        echo "<script>
        alert('Mohon Pilih Gambar Terlebih Dahulu !')
        </script>";
        return false;
    }

    // Cek Apakah Benar Gambar Yang Di Upload

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Hayo Mau upload Apa? :) \n yang anda upload, bukan gambar')
        </script>";
        return false;
    }

    // Cek Ukuran File
    if ($ukuranFile > 1500000) {
        echo "<script>
        alert('Ukuran Gambar Terlalu Besar, Mohon Pilih Gambar Lain')
        </script>";
        return false;
    }
    // Lolos Pengecekan Gambar Siap Upload
    // Generate Nama Random Untuk Gambarnya
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}



// Delete Functions
function hapus()
{
    global $db;
    global $id;
    $image = $_GET["data2"];
    mysqli_query($db, "DELETE FROM prestasi WHERE id = $id");
    $fileToDelete = 'assets/img/'.$image;
    if (file_exists($fileToDelete)) {
        if (unlink($fileToDelete)) {
            echo "<script>
            alert('Gambar Berhasil di hapus')
            </script>";
        } else {
            echo "<script>
            alert('Gambar gagal di hapus ! ')
            </script>";
        }
    } else {
        echo "<script>
        alert('Gambar Tidak Ditemukan')
        </script>";
    }
    return mysqli_affected_rows($db);
}