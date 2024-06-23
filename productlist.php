<?php
session_start();
require 'adminAuth.php';
require 'functions.php';

$query = "SELECT * FROM products WHERE `isDeleted` = 0";
$products = query($query);

?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FEARCLASS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet" />

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Styles-->
  <link rel="stylesheet" href="styling/catalog.css" />
  <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css");
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body style="background-color: white">
  <!-- Navigation Bar Start-->
  <nav class="my-navbar">
    <a href="admin.php" class="my-navbar-logo">FEARTEE</a>
    <div class="my-navbar-nav">
      <a href="login.php">Back To User Page</a>
      <a href="admin.php">Create</a>
      <a href="productlist.php">Update & Delete</a>
    </div>

    <div class="my-navbar-extra">
      <input type="text" placeholder="Search" />
      <a href="#admin" id="menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navigation Bar END -->

  <script src="script.js"></script>

  <!-- Menu Utama -->
  <div class="container mt-5 px-20">
    <div>
      <h1 style="font-size: 2em; text-align: center;">Product List</h1>
    </div>



    <!-- NEW ARRIVALL-->
    <div class="" style="margin-top: 5rem">
      <h2>Product List</h2>
      <div class="row d-flex justify-content-between mt-5">
        <?php foreach ($products as $product) : ?>
          <div class="card col-4 py-0 px-2 mt-3" style="border: none">
            <img src="img/baju part2/<?= $product["gambar"] ?>" class="card-img-top" alt="..." style="border-radius: 1rem" />
            <div class="card-body px-0">
              <p class="card-text"><?= $product["nama"] ?></p>
              <p id="harga"><?= formatRupiah($product["harga"]) ?></p>
            </div>
            <div class="column d-flex justify-content-between">
              <a href="updatemenu.php?productId=<?= $product["id"] ?>">
                <button type="button" class="btn btn-outline-danger btn-sm pr-20 pl-20"><i data-feather="edit"></i></button>
              </a>
              <a href="deletemenu.php?productId=<?= $product["id"] ?>">
                <button type="button" class="btn btn-outline-danger btn-sm pr-20 pl-20"><i data-feather="trash-2"></i></button>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>


      <!-- Icons -->
      <script>
        feather.replace();
      </script>

      <!-- JS Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>