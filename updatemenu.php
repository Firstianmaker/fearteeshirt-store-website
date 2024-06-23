<?php
session_start();
require 'adminAuth.php';
require 'functions.php';

if (isset($_GET["productId"])) {
  $productId = $_GET["productId"];
  $queryProduct = "SELECT * FROM products WHERE id = $productId";
  $queryProductSize = "SELECT product_size.id, product_size.size_id, size.size, product_size.stock 
                         FROM product_size
                         JOIN size ON product_size.size_id = size.id
                         WHERE product_size.product_id = $productId
                         ORDER BY size.id;";
  $product = query($queryProduct)[0];
  $product_size = query($queryProductSize);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productName = $_POST['productName'];
  $productDescription = $_POST['productDescription'];
  $productPrice = $_POST['productPrice'];
  // Assuming you have a function to handle the product update
  if(updateProduct1($_POST, $_FILES) > 0){
    echo '
      <script> 
          alert("Update Berhasil");
          window.location.href = "productlist.php";
      </script>
      ';
      exit();
  }
  
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
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
  <nav class="my-navbar">
    <a href="#" class="my-navbar-logo">FEARTEE</a>
    <div class="my-navbar-nav">
      <a href="login.php">Back To User Page</a>
      <a href="admin.php">Create</a>
      <a href="productlist.php">Update & Delete</a>
    </div>
    <div class="my-navbar-extra">
      <input type="text" placeholder="Search" />
      <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navigation Bar END -->

  <!-- Detail Product Start -->
  <div class="container mt-5 mb-5 pb-6">
    <div class="row d-flex justify-content-between">
      <div class="col-6 d-flex align-items-center justify-content-center" style="flex-direction: column;">
        <img src="img/baju part2/<?= $product["gambar"] ?>" alt="" class="img-fluid" style="border-radius: 1rem" />
      </div>

      <div class="col-5">
        <form method="post" action="" enctype="multipart/form-data">
          <input type="text" name="productId" value="<?= $_GET["productId"] ?>" hidden>
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" id="productName" name="productName" class="form-control" value="<?= $product["nama"] ?>" placeholder="Product Name" />
          </div>

          <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <textarea id="productDescription" name="productDescription" class="form-control" style="opacity: 0.7; margin: 0;" placeholder="Product Description"><?= $product["deskripsi"] ?></textarea>
          </div>

          <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <span>
              <input type="text" id="productPrice" name="productPrice" class="form-control mt-3" aria-label="Product Price" aria-describedby="basic-addon1" placeholder="0" value="<?= $product["harga"] ?>" style="display: inline-block; width: auto; margin-left: 10px;" />
            </span>
          </div>

          <div class="mb-3">
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" id="productImage" name="productImage" class="form-control mt-3" accept="image/*" />
          </div>

          <div class="mt-5 d-flex" style="gap:20px">
            <?php foreach ($product_size as $size) : ?>
              <button type="button" class="size-button" onclick="sizeButton(this, <?= $size['id'] ?>)">
                <?= $size["size"] ?>
              </button>
            <?php endforeach ?>
          </div>

          <div class="mt-3" style="display: none;" id="productStockContainer">
            <input type="int" value="" hidden name="productSizeId" id="inputProductSizeId">
            <label for="productStock" class="form-label">Product Stock</label>
            <span>
              <input type="text" id="productStock" name="productStock" class="form-control mt-3" aria-label="Product Stock" aria-describedby="basic-addon1" placeholder="0" value="NULL" style="display: inline-block; width: auto; margin-left: 10px;" />
            </span>
          </div>

          <button type="submit" class="btn btn-primary mt-3" style="width: 38rem;">Update Detail Product</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <!-- <div class="max-w-screen max-h-96 mx-auto dark:bg-gray-800">
    <footer class="p-4 sm:p-6">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="#" target="_blank" class="flex items-center">
            <img src="img/logo.png" class="mr-3 h-8" alt="FlowBite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">FEARTEE</span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
            <ul class="text-gray-600 dark:text-gray-400">
              <li class="mb-4"><a href="#" target="_blank" class="hover:underline">FEARTEE</a></li>
              <li><a href="#" target="_blank" class="hover:underline">FEARTEE</a></li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
            <ul class="text-gray-600 dark:text-gray-400">
              <li class="mb-4"><a href="#" target="_blank" class="hover:underline">FEARTEE</a></li>
              <li><a href="#" target="_blank" class="hover:underline">FEARTEE</a></li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-600 dark:text-gray-400">
              <li class="mb-4"><a href="#" target="_blank" class="hover:underline">Privacy Policy</a></li>
              <li><a href="#" target="_blank" class="hover:underline">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div> -->
  
  <?php require 'footer.php' ?>
  <!-- Feather Icons JS -->
  <script>
    feather.replace();
  </script>
  <script>
    const productSizeData = <?php echo json_encode($product_size); ?>;
    const inputProductStock = document.getElementById("productStock");
    const productStockContainer = document.getElementById("productStockContainer");
    const inputProductSizeId = document.getElementById("inputProductSizeId");

    function sizeButton(button, sizeId) {
      const productSize = productSizeData.find(productSize => parseInt(productSize.id) === sizeId);

      // Dapatkan semua tombol
      const buttons = document.querySelectorAll('.size-button');

      // Nonaktifkan semua tombol
      buttons.forEach(btn => btn.classList.remove('active'));

      // Aktifkan tombol yang diklik
      button.classList.add('active');

      // Set input product size id dan stock
      inputProductStock.value = productSize.stock;

      // SET displayProductStock Container On
      productStockContainer.style.display = "block";
      inputProductSizeId.value = productSize.id;

    }
  </script>
</body>

</html>