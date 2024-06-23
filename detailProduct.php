<?php
require 'functions.php';
session_start();

if (isset($_GET["productId"])) {
  $productId = $_GET["productId"];
  $queryProduct = "SELECT * FROM products WHERE id = $productId";
  $queryProductSize = "SELECT product_size.id, product_size.size_id, size.size, product_size.stock FROM product_size
                          JOIN size ON product_size.size_id = size.id
                          WHERE product_size.product_id = $productId
                          ORDER BY size.id;";
  $product = query($queryProduct);
  if ($product === []) {
    header("Location: catalog.php");
    exit();
  }
  
  $product = $product[0];
  if ((int)$product["isDeleted"] === 1) {
    header("Location: catalog.php");
    exit();
  }
  $product_size = query($queryProductSize);
  $relatedProductQuery = "SELECT * FROM products WHERE `isDeleted` = 0 AND `id` != $productId LIMIT 6";
  $relatedProduct = query($relatedProductQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FEARCLASS</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Styles-->
  <link rel="stylesheet" href="styling/styles.css" />

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    .my-navbar {
      position: relative;
    }

    .my-navbar .my-navbar-nav a {
      color: black;
    }

    .my-navbar .my-navbar-logo {
      color: black;
    }

    .my-navbar .my-navbar-extra input {
      border: 2px solid black;
      border-radius: 1rem;
      padding: 0.3rem;
    }

    .size-button {
      width: 50px;
      height: 50px;
      border: 2px solid;
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 0.5rem;
    }

    .size-button.active {
      background-color: black;
      color: white;
    }
  </style>
</head>

<body>
  <!-- Navigation Bar Start-->
  <?php require 'navbar.php' ?>
  <!-- Navigation Bar END -->


  <!-- FORM KERANjANG -->

  <form id="cartForm" action="addToCart.php" method="post" style="display: none">
    <input type="text" id="productSizeId" name="productSizeId" value="notSet" hidden>
  </form>

  <!-- Detail Product Start -->
  <div class="container mt-5">
    <div class="row d-flex justify-content-between">
      <div class="col-6">
        <img src="img/baju part2/<?= $product["gambar"] ?>" alt="" class="img-fluid" style="border-radius: 1rem" />
      </div>
      <div class="col-5">
        <h2 style="margin-bottom: 20px"><?= $product["nama"] ?></h2>
        <p style="opacity: 0.7; margin: 0 0">
          <?= $product["deskripsi"] ?>
        </p>
        <p style="margin: 10px 0; font-size: 32px"><?= formatRupiah($product["harga"]) ?></p>
        <div class="mt-5 d-flex" style="gap:20px">
          <?php foreach ($product_size as $size) : ?>
            <button class="size-button" onclick="sizeButton(this, <?= $size['id'] ?>)">
              <?= $size["size"] ?>
            </button>
          <?php endforeach ?>

        </div>
        <p class="mt-4" id="stockProduct"></p>
        <div style="
              width: 100%;
              height: 40px;
              border: 1px solid;
              border-radius: 0.5rem;
              display: flex;
            " class="mt-4">
          <button style="
                width: 20%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: transparent;
                border-right: 1px solid;
              ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6" style="width: 40px; height: 40px">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
            </svg>
          </button>
          <button type="submit" style="
                width: 20%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: transparent;
              " form="cartForm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6" style="width: 40px; height: 40px">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
          </button>
          <a id="linkCheckout" style="
                width: 60%;
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
              " href="#">
            <p style="color: white; margin: 0 0">Buy Now</p>
          </a>
        </div>
      </div>
    </div>
    <!-- RELATED PRODUCT -->
    <div class="" style="margin-top: 120px">
      <h2>Related Product</h2>
      <div class="row d-flex justify-content-between mt-5">
        <?php foreach ($relatedProduct as $product) : ?>
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

  <!-- footer -->
  <?php require 'footer.php' ?>
  <!-- Icons -->
  <script>
    feather.replace();
  </script>

  <!-- CSR -->
  <script>
    const stockProduct = document.getElementById("stockProduct");
    const productSizeData = <?php echo json_encode($product_size); ?>;
    const inputProductSize = document.getElementById("productSizeId");
    const linkCheckout = document.getElementById("linkCheckout");
    console.log(productSizeData);

    console.log(productSizeData);

    function sizeButton(button, sizeId) {
      const productSize = productSizeData.find(productSize => parseInt(productSize.id) === sizeId);

      // ubah nilai sisa stok
      stockProduct.innerHTML = "Sisa Stok : " + productSize.stock;

      // Dapatkan semua tombol
      const buttons = document.querySelectorAll('.size-button');

      // Nonaktifkan semua tombol
      buttons.forEach(btn => btn.classList.remove('active'));

      // Aktifkan tombol yang diklik
      button.classList.add('active');

      // Mengubah Value Form
      inputProductSize.value = productSize.id;
      linkCheckout.href = "checkout.php?from=detailProduct&productId=" + productSize.id;

    }
  </script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>