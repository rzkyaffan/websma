<?php 
require 'functions.php';
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];

if(hapus($id) > 0){
    echo "
    <script>
    confirm(`data berhasil di hapus` )
    document.location.href = '/smanusa'
    </script>
    ";
} else{
    echo "<script>
    alert('data gagal di hapus')
    document.location.href = 'admin.php'
    </script>
    ";
}
?>