<?php 
    session_start();

    if(isset($_GET["update"]) && isset($_GET["productSizeId"])){
        if($_GET["update"] == "tambah"){
            $_SESSION["cart"][$_GET["productSizeId"]]["quantity"] += 1;
            header("Location: cart.php");
        }else if($_GET["update"] == "kurang"){
            $_SESSION["cart"][$_GET["productSizeId"]]["quantity"] -= 1;
            if($_SESSION["cart"][$_GET["productSizeId"]]["quantity"] === 0){
                unset($_SESSION["cart"][$_GET["productSizeId"]]);
            }
            header("Location: cart.php");
        }else if($_GET["update"] == "hapus"){
            unset($_SESSION["cart"][$_GET["productSizeId"]]);
            header("Location: cart.php");
        }
        else{
            header("Location: cart.php");
        }
    }

?>