<?php
session_start();
unset($_SESSION["auth"]);
unset($_SESSION["cart"]);

session_destroy();
header("Location: catalog.php");
