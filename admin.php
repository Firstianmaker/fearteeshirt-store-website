<?php
session_start();
require 'adminAuth.php';
require 'functions.php';

if (isset($_POST["submitProduct"])) {
  $registerProduct = registerProduct($_POST, $_FILES);
  if( $registerProduct > 0){
    echo '
      <script> 
          alert("Berhasil Banngg!");
          window.location.href = "admin.php";
      </script>
      ';
  }else{
    echo '
      <script> 
          alert("Gagal");
      </script>
      ';
  }
}

$sizeQuery =  "SELECT * FROM size";
$sizes = query($sizeQuery);
?>

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
  <link rel="stylesheet" href="styling/styles.css" />
  <link rel="stylesheet" href="styling/animate.css" />
  <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css");
  </style>
  <script>
    function validateForm() {
      var productName = document.forms["productForm"]["productName"].value;
      var productPrice = document.forms["productForm"]["productPrice"].value;
      var productDescription = document.forms["productForm"]["productDescription"].value;
      var productImage = document.forms["productForm"]["productImage"].value;
      var productSize = document.forms["productForm"]["item_size"].value;
      var productStock = document.forms["productForm"]["productStock"].value;

      if (productName == "" || productPrice == "" || productDescription == "" || productImage == "" || productSize == "" || productStock == "") {
        alert("All fields must be filled out");
        return false;
      }
      return true;
    }

    document.addEventListener('DOMContentLoaded', function() {
      const dropdownButton = document.getElementById('dropdown-button');
      const dropdownMenu = document.getElementById('dropdown-menu');
      const selectedOptionInput = document.getElementById('selected-option');
      const options = dropdownMenu.querySelectorAll('[data-value]');

      dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
      });

      options.forEach(option => {
        option.addEventListener('click', function() {
          selectedOptionInput.value = this.getAttribute('data-value');
          dropdownButton.querySelector('span').textContent = this.textContent;
          dropdownMenu.classList.add('hidden');
        });
      });
    });
  </script>
</head>

<body style="background-color: black">
  <!-- Navigation Bar Start-->
  <?php require 'navbar.php'?>
  <!-- Navigation Bar END -->

  <!-- Landing Start -->
  <section class="hero" id="admin" style="background-image: url('img/bg.jpg')">
    <main class="content">
      <h1>Welcome, Admin!</h1>
      <p>Edit your Feartee website here:</p>
      <a href="#create" class="CTA">Create</a>
      <a href="productlist.php" class="CTA">Edit Product</a>
    </main>
  </section>
  <!-- Landing END -->

  <!-- Create Start -->
  <section id="create"></section>
  <main>
    <div class="min-h-screen bg-black py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <form name="productForm" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
              <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Add an Item</h2>
                  <p class="text-sm text-gray-500 font-normal leading-relaxed">Add item to Feartee Catalog here:</p>
                </div>
              </div>
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">

                  <!-- Item Name -->
                  <div class="flex flex-col">
                    <label class="leading-loose">Item Name:</label>
                    <input name="productName" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Item Name">
                  </div>

                  <!-- Item Price -->
                  <div class="flex flex-col">
                    <label class="leading-loose">Item Price:</label>
                    <input name="productPrice" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Item Price">
                  </div>

                  <!-- Item Description -->
                  <div class="flex flex-col">
                    <label class="leading-loose">Item Description:</label>
                    <input name="productDescription" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Item Description">
                  </div>

                  <!-- Add Image -->
                  <div class="flex flex-col text-center">
                    <label class="leading-loose">Add Item Image:</label>
                  </div>
                  <div class="flex justify-center items-center bg-white">
                    <div class="w-full md:w-1/2 relative grid grid-cols-1 md:grid-cols-3 border border-gray-300 bg-gray-100 rounded-lg">
                      <div class="rounded-l-lg p-4 bg-gray-200 flex flex-col justify-center items-center border-0 border-r border-gray-300 ">
                        <label class="cursor-pointer hover:opacity-80 inline-flex items-center shadow-md my-2 px-2 py-2 bg-gray-900 text-gray-50 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" for="restaurantImage">
                          Select image
                          <input id="restaurantImage" class="text-sm cursor-pointer w-36 hidden" type="file" name="productImage">
                        </label>
                        <button type="button" class='inline-flex items-center shadow-md my-2 px-2 py-2 bg-gray-900 text-gray-50 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                          remove image
                        </button>
                      </div>
                      <div class="relative order-first md:order-last h-28 md:h-auto flex justify-center items-center border border-dashed border-gray-400 col-span-2 m-2 rounded-lg bg-no-repeat bg-center bg-origin-padding bg-cover">
                        <span class="text-gray-400 opacity-75">
                          <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.7" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Item Size -->
                  <div class="flex flex-col text-center">
                    <label class="leading-loose">Item Size:</label>
                  </div>
                  <div class="flex items-center justify-center">
                    <div class="relative group">
                      <button type="button" id="dropdown-button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                        <span class="mr-2">Choose Size</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </button>
                      <div id="dropdown-menu" class="absolute z-10 hidden mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg group-hover:block">
                        <input type="hidden" name="item_size" id="selected-option" />
                        <ul class="py-1 text-sm text-gray-700">
                          <?php foreach($sizes as $size): ?>
                          <li>
                            <button type="button" class="block w-full px-4 py-2 text-left hover:bg-gray-100" data-value="<?= $size["id"] ?>"><?= $size["size"] ?></button>
                          </li>
                          <?php endforeach ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Item Stock -->
                  <div class="flex flex-col">
                    <label class="leading-loose">Item Stock:</label>
                    <input name="productStock" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Item Stock">
                  </div>

                </div>
                <div class="pt-4 flex items-center space-x-4">
                  <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg> Cancel
                  </button>
                  <button type="submit" name="submitProduct" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create Item</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!-- Create End -->

  <!-- Footer Start -->
  <!-- <footer class="flex flex-col items-center justify-center">
    <div class="social-media">
      <a href="#"><i data-feather="facebook"></i></a>
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
    </div>
    <p>&copy; 2023 Your Website. All Rights Reserved.</p>
    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
  </footer> -->
  <!-- Footer End -->

  <!-- Icon Script -->
  <script>
    feather.replace();
  </script>
</body>

</html>
