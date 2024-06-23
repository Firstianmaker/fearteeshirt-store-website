<?php
require 'functions.php';
session_start();

if (!isset($_POST["orderId"])) {
  header("Location: catalog.php");
  exit();
}
$orderId = $_POST["orderId"];
$orderQuery = "SELECT orders.alamat_pengiriman, orders.hargaTotal, payment_method.name as payment_name, payment_method.gambar, users.username
                  FROM orders 
                  INNER JOIN payment_method ON orders.payment_id = payment_method.id
                  INNER JOIN users ON orders.user_id = users.id
                  WHERE orders.id = $orderId ";
$order = query($orderQuery)[0];

$detailOrderQuery = "SELECT detail_order.jumlah, products.nama, products.gambar, products.harga, size.size, products.deskripsi 
                        FROM detail_order
                        INNER JOIN product_size ON detail_order.product_id = product_size.id
                        INNER JOIN products ON product_size.product_id = products.id
                        INNER JOIN size ON product_size.size_id = size.id
                        WHERE detail_order.order_id = $orderId;
                        ";

$detailOrders = query($detailOrderQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>FEARCLASS</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Styles-->
  <link rel="stylesheet" href="styling/cart.css" />
</head>

<style>
  @layer utilities {

    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  }
</style>

<body>
  <main class="bg-white px-10 sm:px-6 sm:pt-24 lg:px-8 lg:py-10">
    <div>
      <div>
        <h1 class="text-base font-medium text-indigo-600">Feartee</h1>
        <p class="mt-2 text-4xl font-bold tracking-tight">It's on the way!</p>
        <p class="mt-2 text-base text-gray-500">
          Your order #14034056 has shipped and will be with you soon.
        </p>
      </div>

      <section aria-labelledby="order-heading" class="mt-10 border-t border-gray-200">
        <h2 id="order-heading" class="sr-only">Your order</h2>

        <h3 class="sr-only">Items</h3>
        <?php
        $subTotal = 0;
        foreach ($detailOrders as $detailOrder) :
          $subTotal += $detailOrder["harga"] * $detailOrder["jumlah"];
        ?>
          <div class="flex space-x-6 border-b border-gray-200 py-10">
            <img src="img/baju part2/<?= $detailOrder["gambar"] ?>" alt="Glass bottle with black plastic pour top and mesh insert." class="h-20 w-20 flex-none rounded-lg bg-gray-100 object-cover object-center sm:h-40 sm:w-40" />
            <div class="flex flex-auto flex-col">
              <div>
                <h4 class="font-medium text-gray-900">
                  <a href="#"><?= $detailOrder["nama"] ?></a>
                </h4>
                <p class="mt-2 text-sm text-gray-600">
                  <?= $detailOrder["deskripsi"] ?>
                </p>
              </div>
              <div class="mt-6 flex flex-1 items-end">
                <dl class="flex space-x-4 divide-x divide-gray-200 text-sm sm:space-x-6">
                  <div class="flex">
                    <dt class="font-medium text-gray-900">Quantity</dt>
                    <dd class="ml-2 text-gray-700"><?= $detailOrder["jumlah"] ?></dd>
                  </div>
                  <div class="flex pl-4 sm:pl-6">
                    <dt class="font-medium text-gray-900">Size</dt>
                    <dd class="ml-2 text-gray-700"><?= $detailOrder["size"] ?></dd>
                  </div>
                  <div class="flex pl-4 sm:pl-6">
                    <dt class="font-medium text-gray-900">Price</dt>
                    <dd class="ml-2 text-gray-700"><?= formatRupiah($detailOrder["harga"]) ?></dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
        <?php endforeach ?>

        <div class="sm:ml-40 sm:pl-6">
          <h3 class="sr-only">Your information</h3>

          <dl class="grid grid-cols-2 gap-x-6 py-3 text-sm">
            <div>
              <dt class="font-medium text-gray-900">Address</dt>
              <dd class="mt-2 text-gray-700">
                <address class="not-italic">
                  <span class="block"><?= $order["alamat_pengiriman"] ?></span>
                </address>
              </dd>
            </div>
            <div>
              <div>
                <dt class="font-medium text-gray-900">Phone Number</dt>
                <dd class="mt-2 text-gray-700">
                  <p></p>
                  <p>
                    <span aria-hidden="true">********</span><span class="sr-only">Ending in </span>1010
                  </p>
                </dd>
              </div>
            </div>
          </dl>

          <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 py-3 text-sm">
            <div>
              <dt class="font-medium text-gray-900">Name</dt>
              <dd class="mt-2 text-gray-700">
                <p><?= $order["username"] ?></p>
              </dd>
            </div>
          </dl>

          <dl class="space-y-6 border-t border-gray-200 pt-10 text-sm">
            <div class="flex justify-between">
              <dt class="font-medium text-gray-900">Subtotal</dt>
              <dd class="text-gray-700"><?= formatRupiah($subTotal) ?></dd>
            </div>

            <div class="flex justify-between">
              <dt class="font-medium text-gray-900">Taxes</dt>
              <dd class="text-gray-700"><?= formatRupiah($subTotal * 0.11) ?></dd>
            </div>
            <div class="flex justify-between">
              <dt class="font-medium text-gray-900">Total</dt>
              <dd class="text-gray-900"><?= formatRupiah($order["hargaTotal"]) ?></dd>
            </div>
          </dl>
        </div>
        <div class="mt-16 border-t border-gray-200 py-6 text-right">
          <a href="catalog.php" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
            Continue Shopping
            <span aria-hidden="true"> &rarr;</span>
          </a>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <div class="max-w-screen max-h-96 mx-auto dark:bg-gray-800">
    <footer class="p-4 sm:p-6">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="#" target="_blank" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">&copy; Feartee™</span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div class="px-4">
            <a href="#">
              <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Home</h3>
            </a>
            <ul>
              <li class="mb-4">
                <a href="#aboutus" target="_blank" class="text-gray-600 hover:underline dark:text-gray-400">About Us</a>
              </li>
            </ul>
          </div>
          <div>
            <a href="catalog.php">
              <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Shopping</h3>
            </a>
            <ul>
              <li class="mb-4">
                <a href="catalog.php" target="_blank" class="text-gray-600 hover:underline dark:text-gray-400">Product</a>
              </li>
              <li>
                <a href="cart.php" target="_blank" class="text-gray-600 hover:underline dark:text-gray-400">Cart</a>
              </li>
            </ul>
          </div>
          <div>
            <a href="login.php">
              <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Login</h3>
            </a>
            <ul>
              <li class="mb-4">
                <a href="login.php" target="_blank" class="text-gray-600 hover:underline dark:text-gray-400">Sign In</a>
              </li>
              <li>
                <a href="register.php" target="_blank" class="text-gray-600 hover:underline dark:text-gray-400">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com" target="_blank" class="hover:underline">Feartee™</a>. All Rights Reserved. </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
              </path>
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
    </footer>
  </div>

</body>

</html>