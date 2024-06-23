<?php 
session_start();
require 'adminAuth.php';
require 'functions.php';

if(isset($_GET["productId"])){
    if(deleteProduct($_GET["productId"])  > 0 ){
        echo '
        <script> 
            alert("Product Berhasil Dihapus!");
            window.location.href = "productlist.php";
        </script>
        ';
    }else{
        echo '
        <script> 
            alert("Product Gagal Dihapus!");
            window.location.href = "productlist.php";
        </script>
        ';
    }
}