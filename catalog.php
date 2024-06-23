<?php
require 'functions.php';
session_start();

$query = "SELECT * FROM products WHERE `isDeleted` = 0";
$products = query($query);

$queryNewArrival = "SELECT * FROM products
                    WHERE `isDeleted` = 0
                    ORDER BY id DESC
                    LIMIT 3;";  
$newArrivalProduct = query($queryNewArrival);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FEARCLASS</title>

  <!-- tailwind -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Styles-->
  <link rel="stylesheet" href="styling/catalog.css" />

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <?php require 'navbar.php'?>
  <!-- Navigation Bar END -->
  <script src="script.js"></script>

  <!-- Menu Utama -->
  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-12">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="img/bg.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Some representative placeholder content for the first slide.
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/img1.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>
                  Some representative placeholder content for the second
                  slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/img2.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>
                  Some representative placeholder content for the third slide.
                </p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!-- NEW ARRIVALL-->
    <div class="" style="margin-top: 5rem">
      <h2>New Arrival</h2>
      <div class="row d-flex justify-content-between mt-5">
        <?php foreach ($newArrivalProduct as $product) : ?>
          <a class="my-collection-card col-4 py-0 px-2 " href="detailProduct.php?productId=<?= $product["id"] ?>" style="text-decoration: none">
            <div class="card" style="border: none">
              <img src="img/baju part2/<?= $product["gambar"] ?>" class="card-img-top" alt="..." style="border-radius: 1rem" />
              <div class="card-body px-0">
                <p class="card-text"><?= $product["nama"] ?></p>
                <p class="card-text" style="opacity: 0.5">
                  <?= $product["deskripsi"] ?>
                </p>
                <p id="harga"> <?= formatRupiah($product["harga"]) ?></p>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- COLLECTIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN -->
    <div class="" style="margin-top: 3rem">
      <h2>Collection</h2>
      <div class="row d-flex justify-content-between mt-5">
        <?php foreach ($products as $product) : ?>
          <a class="my-collection-card col-4 py-0 px-2 " href="detailProduct.php?productId=<?= $product["id"] ?>" style="text-decoration: none">
            <div class="card" style="border: none">
              <img src="img/baju part2/<?= $product["gambar"] ?>" class="card-img-top" alt="..." style="border-radius: 1rem" />
              <div class="card-body px-0">
                <p class="card-text"><?= $product["nama"] ?></p>
                <p class="card-text" style="opacity: 0.5">
                  <?= $product["deskripsi"] ?>
                </p>
                <p id="harga"> <?= formatRupiah($product["harga"]) ?></p>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php require 'footer.php' ?>
  
  <!-- Icons -->
  <script>
    feather.replace();
  </script>

  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </div>
</body>

</html>