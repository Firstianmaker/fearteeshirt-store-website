<?php
session_start();

if(!isset($_SESSION["auth"])){
    echo '
        <script> 
            alert("Maaf Anda Harus Login Dulu!");
            window.location.href = "catalog.php";
        </script>
        ';
        exit();
}

if (!isset($_POST["productSizeId"])) {
    header("Location: catalog.php");
    exit();
}else if ($_POST["productSizeId"] === "notSet") {
    echo '
        <script> 
            alert("Silahkan Pilih Size Terlebih Dahulu");
            window.location.href = "catalog.php";
        </script>
        ';
} else {
    if(!isset($_SESSION['cart'])){
        $_SESSION["cart"] = [];
    }

    if(isset($_SESSION["cart"][$_POST["productSizeId"]])){
        echo '
        <script> 
            alert("Produk ini sudah ada di cart!");
            window.location.href = "catalog.php";
        </script>
        ';
    }

    // Membuat array item baru
    $item = array(
        "quantity" => 1
    );

    // Menambahkan item ke keranjang belanja
    $_SESSION['cart'][$_POST["productSizeId"]] = $item;
    echo '
        <script> 
            alert("Produk Berhasil Ditambahkan di Cart");
            window.location.href = "catalog.php";
        </script>
        ';
}
