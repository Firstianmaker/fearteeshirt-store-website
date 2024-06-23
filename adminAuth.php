<?php 
    if(!isset($_SESSION["auth"]) && !$_SESSION["auth"]["admin"] === true ){
        header("Location: catalog.php");
        exit();
    }