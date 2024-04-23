<?php 
require 'functions.php';

$id = $_GET["id"];

if(delete($id) > 0){
    echo "
    <script>
    confirm(`data berhasil di hapus` )
    document.location.href = 'index.php'
    </script>
    ";
} else{
    echo "<script>
    alert('data gagal di hapus')
    document.location.href = 'hapus.php'
    </script>
    ";
}
?>