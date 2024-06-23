<?php
require 'functions.php';
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

$productSize;
$priceTotal = 0;
$queryPaymentMethods = "SELECT * FROM payment_method";
$paymentMethods = query($queryPaymentMethods);


function processFromCart()
{
  $keys = array_keys($_SESSION["cart"]);
  // Inisialisasi string kondisi
  $condition = "(";

  // Loop melalui keranjang belanja untuk membangun kondisi
  foreach ($keys as $productSizeId) {
    $condition .= "$productSizeId, ";
  }
  // Menghapus koma dan spasi terakhir, lalu menutup string kondisi dengan kurung tutup
  $condition = rtrim($condition, ', ') . ")";


  $query = "SELECT product_size.id, products.nama, products.harga, products.gambar, size.size FROM product_size 
              INNER JOIN products ON product_size.product_id = products.id
              INNER JOIN size ON product_size.size_id = size.id
              WHERE product_size.id IN $condition";
  return query($query);
}

function processFromDetailProduct()
{
  $productId = $_GET["productId"];
  $queryProduct = "SELECT product_size.id, products.nama, products.harga, products.gambar, size.size FROM product_size 
              INNER JOIN products ON product_size.product_id = products.id
              INNER JOIN size ON product_size.size_id = size.id
              WHERE product_size.id = $productId";
  return query($queryProduct);
}



if (isset($_GET["from"])) {
  if ($_GET["from"] === "cart") {
    $productSize = processFromCart();
    if (isset($_POST["method"])) {
      $userId = (int)$_SESSION["auth"]["userId"];
      $alamat_pengiriman = $_POST["alamat"];
      $paymentid = $_POST["paymentMethodId"];
      $hargaTotal = $_POST["totalPrice"];

      $insertOrderQuery = "INSERT INTO `orders`( `user_id`, `tanggal_order`, `alamat_pengiriman`, `status`, `payment_id`, `hargaTotal`) 
                            VALUES ('$userId', CURRENT_DATE, '$alamat_pengiriman', 'diproses', '$paymentid', $hargaTotal)";
      if (queryInsert($insertOrderQuery)) {
        $orderId = mysqli_insert_id($DBCONNECT);
        foreach ($productSize as $product) {
          $insertDetailOrderQuery = "INSERT INTO `detail_order` (`order_id`, `product_id`, `jumlah`) VALUES ('$orderId', '{$product['id']}', '{$_SESSION["cart"][$product["id"]]["quantity"]}')";
          queryInsert($insertDetailOrderQuery);
        }
        unset($_SESSION["cart"]);
        header("Location: succes.php?orderId=$orderId");
      }
    }
  } else if ($_GET["from"] === "detailProduct") {
    if (isset($_GET["productId"])) {
      $productSize = processFromDetailProduct();
      if (isset($_POST["method"])) {
        $userId = (int)$_SESSION["auth"]["userId"];
        $alamat_pengiriman = $_POST["alamat"];
        $paymentid = $_POST["paymentMethodId"];
        $hargaTotal = $_POST["totalPrice"];

        $insertOrderQuery = "INSERT INTO `orders`( `user_id`, `tanggal_order`, `alamat_pengiriman`, `status`, `payment_id`, `hargaTotal`) 
                              VALUES ('$userId', CURRENT_DATE, '$alamat_pengiriman', 'diproses', '$paymentid', $hargaTotal)";
        if (queryInsert($insertOrderQuery)) {
          $orderId = mysqli_insert_id($DBCONNECT);
          foreach ($productSize as $product) {
            $insertDetailOrderQuery = "INSERT INTO `detail_order` (`order_id`, `product_id`, `jumlah`) VALUES ('$orderId', '{$product['id']}', '1')";
            queryInsert($insertDetailOrderQuery);
          }
          header("Location: succes.php?orderId=$orderId");
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FEARCLASS</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Styles-->
  <link rel="stylesheet" href="styling/login.css" />
</head>
<!-- component -->
<style>
  @import url("https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css");
</style>

<body>
  <div class="min-w-screen min-h-screen bg-gray-50 py-5">
    <div class="px-5">
      <div class="mb-2">
        <a href="catalog.php" class="focus:outline-none hover:underline text-gray-500 text-sm"><i class="mdi mdi-arrow-left text-gray-400"></i>Back</a>
      </div>
      <div class="mb-2">
        <h1 class="text-3xl md:text-5xl font-bold text-gray-600">
          Checkout.
        </h1>
      </div>

    </div>
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
      <div class="w-full">
        <div class="-mx-3 md:flex items-start">
          <div class="px-3 md:w-7/12 lg:pr-10">
            <div class="w-full mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6">
              <?php if ($_GET["from"] === "cart") : ?>
                <?php
                foreach ($productSize as $product) :
                  $priceTotal += $product["harga"] * $_SESSION["cart"][$product["id"]]["quantity"];
                ?>
                  <div class="w-full flex items-center mt-5">
                    <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                      <img src="img/baju part2/<?= $product["gambar"] ?>" alt="" />
                    </div>
                    <div class="flex-grow pl-3">
                      <h6 class="font-semibold uppercase text-gray-600">
                        <?= $product["nama"] ?>
                      </h6>
                      <p class="text-gray-400">Size: <?= $product["size"] ?></p>
                      <p class="text-gray-400">x <?= $_SESSION["cart"][$product["id"]]["quantity"] ?></p>
                    </div>
                    <div>
                      <span class="font-semibold text-gray-600 text-xl"><?= formatRupiah($product["harga"] * $_SESSION["cart"][$product["id"]]["quantity"]) ?></span><span class="font-semibold text-gray-600 text-sm">,00</span>
                    </div>
                  </div>
                <?php endforeach ?>
              <?php elseif ($_GET["from"] === "detailProduct") : ?>
                <?php
                $product = $productSize[0];
                $priceTotal = $product["harga"];
                ?>
                <div class="w-full flex items-center mt-5">
                  <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                    <img src="img/baju part2/<?= $product["gambar"] ?>" alt="" />
                  </div>
                  <div class="flex-grow pl-3">
                    <h6 class="font-semibold uppercase text-gray-600">
                      <?= $product["nama"] ?>
                    </h6>
                    <p class="text-gray-400">Size: <?= $product["size"] ?></p>
                    <p class="text-gray-400">x 1</p>
                  </div>
                  <div>
                    <span class="font-semibold text-gray-600 text-xl"><?= formatRupiah($product["harga"]) ?></span><span class="font-semibold text-gray-600 text-sm">,00</span>
                  </div>
                </div>
              <?php endif ?>
            </div>
            <div class="mb-6 pb-6 border-b border-gray-200">
              <div class="-mx-2 flex items-end justify-end">
                <div class="flex-grow px-2 lg:max-w-xs">
                  <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Discount code</label>
                  <div>
                    <input class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="XXXXXX" type="text" />
                  </div>
                </div>
                <div class="px-2">
                  <button class="block w-full max-w-xs mx-auto border border-transparent bg-gray-400 hover:bg-gray-500 focus:bg-gray-500 text-white rounded-md px-5 py-2 font-semibold">
                    APPLY
                  </button>
                </div>
              </div>
            </div>
            <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
              <div class="w-full flex mb-3 items-center">
                <div class="flex-grow">
                  <span class="text-gray-600">Subtotal</span>
                </div>
                <div class="pl-3">
                  <span class="font-semibold"><?= formatRupiah($priceTotal) ?></span>
                </div>
              </div>
              <div class="w-full flex items-center">
                <div class="flex-grow">
                  <span class="text-gray-600">Pajak</span>
                </div>
                <div class="pl-3">
                  <span class="font-semibold"><?= formatRupiah($priceTotal * 0.11) ?></span>
                </div>
              </div>
            </div>
            <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
              <div class="w-full flex items-center">
                <div class="flex-grow">
                  <span class="text-gray-600">Total</span>
                </div>
                <div class="pl-3">
                  <span class="font-semibold"><?= formatRupiah($priceTotal * 1.11) ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="px-3 md:w-5/12">
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
              <div class="w-full flex mb-3 items-center">
                <div class="w-32">
                  <span class="text-gray-600 font-semibold">Contact</span>
                </div>
                <div class="flex-grow pl-3">
                  <span>Scott Windon</span>
                </div>
              </div>
              <div class="mt-6">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="myaddress">
                  Alamat
                </label>
                <input id="myaddress" type="text" placeholder="Masukkan Alamat" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>
            </div>
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
              <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="payment-method">
                  Metode Pembayaran
                </label>
                <div class="relative inline-block w-full">
                  <button id="dropdown-button" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <span id="selected-payment" class="flex items-center">
                      <img id="selected-logo" src="https://via.placeholder.com/20" alt="Payment Logo" class="h-5 mr-2">
                      Pilih Metode Pembayaran
                    </span>
                  </button>
                  <div id="dropdown-menu" class="absolute hidden w-full mt-1 bg-white border border-gray-300 rounded shadow-lg">
                    <!-- DARI PHP -->
                    <?php
                    foreach ($paymentMethods as $paymentMethod) :
                    ?>
                      <div class="cursor-pointer hover:bg-gray-100 py-2 px-4 flex items-center" data-value="<?= $paymentMethod["name"] ?>">
                        <img src="img/logopayment/<?= $paymentMethod["gambar"] ?>" alt="<?= $paymentMethod["name"] ?> Logo" class="h-5 mr-2">
                        <?= $paymentMethod["name"] ?>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
                <div class="mt-6">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                    Nomor Telepon
                  </label>
                  <input id="phone" type="tel" placeholder="08912345678" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

              </div>
            </div>
            <!-- FORM -->
            <form action="" style="display: hidden;" method="post" id="hiddenForm">
              <?php if (isset($_GET["from"]) && $_GET["from"] === "cart") : ?>
                <input type="text" name="method" value="cart" hidden>
              <?php elseif (isset($_GET["from"]) && $_GET["from"] === "detailProduct") : ?>
                <input type="text" name="method" value="detailProduct" hidden>
              <?php endif; ?>
              <input type="int" name="paymentMethodId" value="0" id="paymentIdInput" hidden>
              <input type="int" name="totalPrice" value="<?= $priceTotal * 1.11 ?>" hidden>
              <input type="text" name="alamat" hidden id="hiddenAddress">
              <input type="text" name="phone" id="hiddenPhone">
            </form>
            <button id="submitBtn" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold" type="submit" name="submitCheckout">
              <i class="mdi mdi-lock-outline mr-1">PAY NOW</i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    // convert data euy to js
    const paymentMethods = <?php echo json_encode($paymentMethods);
                            ?>;
    // Handle the form submission

    document.querySelector('#submitBtn').addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah submit default

      // Mengambil nilai dari elemen input lain
      let address = document.querySelector('#myaddress').value;
      let phone = document.querySelector('#phone').value;

      // Mengisi form tersembunyi

      document.querySelector('#hiddenAddress').value = address;
      document.querySelector('#hiddenPhone').value = phone;

      // Mengirim form tersembunyi
      document.querySelector('#hiddenForm').submit();
    });
  </script>
  <script src="payment.js"></script>
</body>

</html>