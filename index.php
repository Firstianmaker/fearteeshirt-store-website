<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FEARCLASS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css"
      rel="stylesheet"
    />
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Styles-->
    <link rel="stylesheet" href="styling/styles.css" />
    <link rel="stylesheet" href="styling/animate.css" />
  </head>
  <style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css");
  </style>
  <body style="background-color: white">
    <!-- Navigation Bar Start-->
    <?php include 'navbar.php' ?>
   
    <!-- Navigation Bar END -->

    <!-- Landing Start -->
    <section class="hero" id="home" style="background-image: url('img/bg.jpg')">
      <main class="content">
        <h1>Welcome,</h1>
        <p>Express yourself through fashion.</p>
        <a href="catalog.php" class="CTA">Explore</a>
      </main>
    </section>
    <!-- Landing END -->

    <section id="aboutus">
      <main>
        <div class="relative overflow-hidden bg-white mt-10 animate-fade-in">
          <div class="pt-20 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div
              class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8"
            >
              <div class="sm:max-w-lg">
                <h1
                  class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6x6 animate-slide-in-left"
                >
                  Discover Your New Favorite T-Shirt
                </h1>
                <p
                  class="mt-4 text-xl text-gray-500 text-justify animate-slide-in-left"
                >
                  Experience comfort and style with our latest collection,
                  designed to provide you with the perfect fit and a touch of
                  elegance, no matter the season.
                </p>
              </div>
              <div>
                <div class="mt-10">
                  <!-- Decorative image grid -->
                  <div
                    aria-hidden="true"
                    class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl"
                  >
                    <div
                      class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8"
                    >
                      <div class="flex items-center space-x-6 lg:space-x-8">
                        <div
                          class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8 animate-scale-up"
                        >
                          <div
                            class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100"
                          >
                            <img
                              src="img/mockup/orang1.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                          <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img
                              src="img/mockup/orang2.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                        </div>
                        <div
                          class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8 animate-scale-up"
                        >
                          <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img
                              src="img/mockup/orang3.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                          <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img
                              src="img/mockup/orang4.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                          <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img
                              src="img/mockup/orang5.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                        </div>
                        <div
                          class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8 animate-scale-up"
                        >
                          <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img
                              src="img/mockup/orang6.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                          <div class="h-64 w-44 overflow-hidden rounded-lg">
                            <img
                              src="img/mockup/orang7.jpg"
                              alt=""
                              class="h-full w-full object-cover object-center"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a
                    href="catalog.php"
                    class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700 animate-bounce"
                    >Shop Collection</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>

    <section>
      <main>
        <div class="bg-teal-500 mt-10 py-24 sm:py-32 animate-fade-in">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2
              class="text-center text-lg font-semibold leading-8 text-gray-900 animate-on-scroll"
            >
              Our Payment Partner Offers
            </h2>
            <div
              class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5"
            >
              <img
                class="col-span-2 max-h-40 w-full object-contain lg:col-span-1 animate-bounce"
                src="img/logopayment/dana2.jpg"
                alt="Transistor"
                width="208"
                height="48"
              />
              <img
                class="col-span-2 max-h-40 w-full object-contain lg:col-span-1 animate-bounce"
                src="img/logopayment/ovo2.jpg"
                alt="Reform"
                width="158"
                height="48"
              />
              <img
                class="col-span-2 max-h-40 w-full object-contain lg:col-span-1 animate-bounce"
                src="img/logopayment/gopay.jpg"
                alt="Tuple"
                width="158"
                height="48"
              />
              <img
                class="col-span-2 max-h-40 w-full object-contain sm:col-start-2 lg:col-span-1 animate-bounce"
                src="img/logopayment/linkaja2.png"
                alt="SavvyCal"
                width="158"
                height="48"
              />
              <img
                class="col-span-2 col-start-2 max-h-40 w-full object-contain sm:col-start-auto lg:col-span-1 animate-bounce"
                src="img/logopayment/spay2.png"
                alt="Statamic"
                width="158"
                height="48"
              />
            </div>
          </div>
        </div>
      </main>
    </section>
    <section>
      <main>
        <div class="bg-white sm:pt-24">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
              <h2
                id="about"
                class="text-5xl font-semibold leading-7 text-indigo-600 animate-scale-up"
              >
                Feartee
              </h2>
              <p
                class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl animate-scale-up"
              >
                Discover why Feartee is the ultimate choice for you.
              </p>
              <p class="mt-6 text-lg leading-8 text-gray-600 animate-zoom-in">
                Experience comfort, luxury, and durability with Feartee's
                stylish apparel. Get the perfect fit, premium quality, and
                unbeatable value.
              </p>
            </div>
            <div class="w-full draggable">
              <div
                class="container flex flex-col items-center gap-16 mx-auto mt-20"
              >
                <div
                  class="grid w-full grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3"
                >
                  <!-- Elemen pertama -->
                  <div
                    class="flex flex-col items-center gap-3 px-8 py-10 dark:bg-gray-800 rounded-3xl shadow-main animate-slide-in-left"
                  >
                    <span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-feather"
                      >
                        <path
                          d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"
                        ></path>
                        <line x1="16" y1="8" x2="2" y2="22"></line>
                        <line x1="17.5" y1="15" x2="9" y2="15"></line>
                      </svg>
                    </span>
                    <p class="text-2xl font-extrabold text-teal-500">
                      Comfortable Fit
                    </p>
                    <p class="text-base leading-7 text-white-600">
                      Our shirts feel like a second skin, allowing you to move
                      freely and comfortably all day long.
                    </p>
                  </div>

                  <!-- Elemen kedua -->
                  <div
                    class="flex flex-col items-center gap-3 px-8 py-10 dark:bg-gray-800 rounded-3xl shadow-main animate-slide-in-left"
                  >
                    <span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-dollar-sign"
                      >
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path
                          d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                        ></path>
                      </svg>
                    </span>
                    <p class="text-2xl font-extrabold text-teal-500">
                      Affordable Luxury
                    </p>
                    <p class="text-base leading-7 text-white-600">
                      Enjoy premium quality at prices that won't break the bank.
                    </p>
                  </div>

                  <!-- Elemen ketiga -->
                  <div
                    class="flex flex-col items-center gap-3 px-8 py-10 dark:bg-gray-800 rounded-3xl shadow-main animate-slide-in-left"
                  >
                    <span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-star"
                      >
                        <polygon
                          points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                        ></polygon>
                      </svg>
                    </span>
                    <p class="text-2xl font-extrabold text-teal-500">
                      Great Quality
                    </p>
                    <p class="text-base leading-7 text-white-600">
                      Meticulously crafted for durability and long-lasting wear.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>
    <section>
      <main>
        <div class="container flex flex-col mx-auto bg-white">
          <div class="w-full draggable">
            <div
              class="container flex flex-col items-center gap-16 mx-auto my-32"
            >
              <p
                class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl animate-scale-up"
              >
                About Us
              </p>
              <p
                class="mt-6 text-lg leading-8 text-gray-600 text-justify animate-slide-up"
              >
                Feartee is all about stylish shirts that blend comfort, style,
                and quality seamlessly. Our mission is to provide you with
                shirts that not only look great but also feel amazing to wear.
                At Feartee, we prioritize comfort, offering shirts that feel
                like a second skin, allowing you to move freely throughout your
                day. We believe in affordable luxury, providing premium quality
                at accessible prices. Our commitment to quality means each
                Feartee shirt is meticulously crafted for durability and
                long-lasting wear. Join us and experience the Feartee difference
                today!
              </p>
              <div
                class="grid w-full grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3"
              >
                <div
                  class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-main animate-zoom-in"
                >
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="38"
                      height="38"
                      viewBox="0 0 38 38"
                      fill="none"
                    >
                      <path
                        d="M31.9904 13.965L22.4166 4.40166C21.6057 3.60976 20.5294 3.16817 19.4104 3.16817C18.2914 3.16817 17.2151 3.60976 16.4041 4.40166L6.8304 13.9017C6.40502 14.283 6.0629 14.7524 5.82645 15.279C5.58999 15.8056 5.46454 16.3776 5.45831 16.9575V30.5425C5.47456 31.6946 5.93476 32.793 6.73808 33.5973C7.5414 34.4016 8.62236 34.846 9.74415 34.8333H28.9225C30.0443 34.846 31.1252 34.4016 31.9285 33.5973C32.7319 32.793 33.1921 31.6946 33.2083 30.5425V16.9575C33.2071 16.4009 33.0989 15.85 32.8899 15.3365C32.6809 14.823 32.3752 14.3569 31.9904 13.965ZM18.47 6.68166C18.7058 6.46025 19.0138 6.33747 19.3333 6.33747C19.6528 6.33747 19.9608 6.46025 20.1966 6.68166L28.5833 15.0417L20.1504 23.4017C19.9146 23.6231 19.6066 23.7459 19.2871 23.7459C18.9675 23.7459 18.6596 23.6231 18.4237 23.4017L10.0833 15.0417L18.47 6.68166ZM30.125 30.5425C30.1052 30.8533 29.9688 31.144 29.7445 31.3537C29.5203 31.5633 29.2256 31.6755 28.9225 31.6667H9.74415C9.44102 31.6755 9.14636 31.5633 8.9221 31.3537C8.69785 31.144 8.56147 30.8533 8.54165 30.5425V17.9708L14.7854 24.1458L12.2262 26.6792C11.9391 26.9758 11.7779 27.3771 11.7779 27.7954C11.7779 28.2137 11.9391 28.615 12.2262 28.9117C12.3695 29.066 12.5417 29.1891 12.7324 29.2734C12.9232 29.3578 13.1286 29.4017 13.3362 29.4025C13.7332 29.4009 14.1142 29.2421 14.4 28.9592L17.1287 26.2675C17.8065 26.6928 18.5853 26.9179 19.3796 26.9179C20.1738 26.9179 20.9527 26.6928 21.6304 26.2675L24.3591 28.9592C24.6449 29.2421 25.026 29.4009 25.4229 29.4025C25.6306 29.4017 25.8359 29.3578 26.0267 29.2734C26.2174 29.1891 26.3896 29.066 26.5329 28.9117C26.82 28.615 26.9812 28.2137 26.9812 27.7954C26.9812 27.3771 26.82 26.9758 26.5329 26.6792L23.9583 24.1458L30.125 17.9708V30.5425Z"
                        fill="#581ff8"
                      />
                    </svg>
                  </span>
                  <p class="text-2xl font-extrabold text-dark-grey-900">
                    Email
                  </p>
                  <p class="text-base leading-7 text-dark-grey-600">
                    Contact us at
                  </p>
                  <a class="text-lg font-bold text-purple-blue-500" href="#"
                    >feartee@gmail.com</a
                  >
                </div>
                <div
                  class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-main animate-zoom-in"
                >
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="38"
                      height="38"
                      viewBox="0 0 38 38"
                      fill="none"
                    >
                      <path
                        d="M30.4237 20.5833C30.0846 20.5833 29.73 20.4725 29.3908 20.3933C28.7045 20.2357 28.0297 20.0294 27.3712 19.7758C26.656 19.5086 25.8699 19.5225 25.164 19.8148C24.4582 20.1071 23.8826 20.6572 23.5479 21.3592L23.2087 22.0875C21.7115 21.2154 20.3283 20.1513 19.0925 18.9208C17.8944 17.6516 16.8583 16.231 16.0092 14.6933L16.7183 14.3608C17.4018 14.0171 17.9374 13.4259 18.222 12.701C18.5067 11.9761 18.5202 11.1687 18.26 10.4342C18.0151 9.7518 17.8143 9.05363 17.6587 8.34417C17.5817 7.99584 17.52 7.63167 17.4737 7.28334C17.2865 6.16807 16.7177 5.1581 15.8698 4.4353C15.0219 3.7125 13.9506 3.32439 12.8487 3.34084H8.20832C7.55657 3.33996 6.91201 3.48056 6.31687 3.75343C5.72174 4.02629 5.18948 4.42526 4.75498 4.92417C4.31148 5.43662 3.98125 6.04161 3.78698 6.69756C3.59271 7.35351 3.53901 8.04489 3.62957 8.72417C4.4676 15.3142 7.39927 21.4362 11.97 26.1408C16.5508 30.8351 22.5117 33.846 28.9283 34.7067C29.1284 34.7224 29.3294 34.7224 29.5296 34.7067C30.6664 34.7084 31.7641 34.28 32.6129 33.5033C33.0987 33.0571 33.4871 32.5105 33.7528 31.8992C34.0185 31.288 34.1554 30.626 34.1546 29.9567V25.2067C34.1463 24.1126 33.7705 23.0551 33.0907 22.2127C32.411 21.3704 31.4689 20.7948 30.4237 20.5833ZM31.1791 30.0833C31.1786 30.3043 31.1331 30.5227 31.0455 30.7245C30.9579 30.9263 30.8301 31.107 30.6704 31.255C30.5014 31.4131 30.3004 31.5306 30.0817 31.5991C29.8631 31.6676 29.6323 31.6852 29.4062 31.6508C23.6532 30.8792 18.3066 28.1865 14.19 23.9875C10.0698 19.756 7.4252 14.2458 6.66665 8.31251C6.63316 8.08028 6.65037 7.84332 6.71702 7.61877C6.78368 7.39422 6.89813 7.1877 7.05207 7.01417C7.19794 6.84816 7.3764 6.71577 7.57569 6.62571C7.77499 6.53565 7.99059 6.48997 8.20832 6.49167H12.8333C13.1897 6.48273 13.5381 6.6009 13.8192 6.82607C14.1002 7.05124 14.2967 7.3695 14.375 7.72667C14.375 8.15417 14.5137 8.59751 14.6062 9.025C14.7844 9.85446 15.0214 10.6694 15.3154 11.4633L13.1571 12.5083C12.7861 12.6832 12.4978 13.0021 12.3554 13.395C12.2012 13.7805 12.2012 14.2129 12.3554 14.5983C14.5742 19.4794 18.3945 23.4029 23.1471 25.6817C23.5224 25.84 23.9434 25.84 24.3187 25.6817C24.7013 25.5354 25.0118 25.2393 25.1821 24.8583L26.1533 22.6417C26.9487 22.9395 27.7624 23.1828 28.5891 23.37C28.99 23.465 29.4217 23.5442 29.8379 23.6075C30.1857 23.6879 30.4956 23.8897 30.7148 24.1784C30.934 24.467 31.0491 24.8248 31.0404 25.1908L31.1791 30.0833ZM22.0833 3.16667C21.7287 3.16667 21.3587 3.16667 21.0042 3.16667C20.5953 3.20237 20.217 3.40341 19.9524 3.72558C19.6879 4.04776 19.5588 4.46466 19.5935 4.88459C19.6283 5.30451 19.824 5.69306 20.1377 5.96476C20.4514 6.23645 20.8574 6.36903 21.2662 6.33334H22.0833C24.5366 6.33334 26.8893 7.33423 28.6241 9.11582C30.3588 10.8974 31.3333 13.3138 31.3333 15.8333C31.3333 16.1183 31.3333 16.3875 31.3333 16.6725C31.2991 17.0902 31.4276 17.5048 31.6906 17.8253C31.9536 18.1459 32.3296 18.3463 32.7362 18.3825H32.8596C33.2455 18.3841 33.618 18.237 33.9034 17.9702C34.1889 17.7035 34.3665 17.3364 34.4012 16.9417C34.4012 16.5775 34.4012 16.1975 34.4012 15.8333C34.4012 12.4767 33.104 9.25725 30.7943 6.88225C28.4847 4.50724 25.3516 3.17087 22.0833 3.16667ZM25.1667 15.8333C25.1667 16.2533 25.3291 16.656 25.6182 16.9529C25.9073 17.2499 26.2994 17.4167 26.7083 17.4167C27.1172 17.4167 27.5093 17.2499 27.7984 16.9529C28.0876 16.656 28.25 16.2533 28.25 15.8333C28.25 14.1536 27.6003 12.5427 26.4438 11.355C25.2873 10.1673 23.7188 9.50001 22.0833 9.50001C21.6744 9.50001 21.2823 9.66682 20.9932 9.96375C20.7041 10.2607 20.5417 10.6634 20.5417 11.0833C20.5417 11.5033 20.7041 11.906 20.9932 12.2029C21.2823 12.4999 21.6744 12.6667 22.0833 12.6667C22.9011 12.6667 23.6853 13.0003 24.2636 13.5942C24.8418 14.188 25.1667 14.9935 25.1667 15.8333Z"
                        fill="#581ff8"
                      />
                    </svg>
                  </span>
                  <p class="text-2xl font-extrabold text-dark-grey-900">
                    Phone
                  </p>
                  <p class="text-base leading-7 text-dark-grey-600">
                    Reach out to us by phone
                  </p>
                  <a class="text-lg font-bold text-purple-blue-500" href="#"
                    >+62 851-5650-3587</a
                  >
                </div>
                <div
                  class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-main animate-zoom-in"
                >
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="38"
                      height="38"
                      viewBox="0 0 38 38"
                      fill="none"
                    >
                      <path
                        d="M31.7091 15.2475C31.4927 12.9341 30.6966 10.7177 29.3984 8.81412C28.1003 6.91054 26.3443 5.38464 24.3014 4.38503C22.2585 3.38541 19.9984 2.94614 17.7412 3.10998C15.4839 3.27383 13.3065 4.03522 11.4208 5.32C9.8008 6.43252 8.44083 7.89972 7.43858 9.6162C6.43633 11.3327 5.81667 13.2558 5.62413 15.2475C5.43524 17.2261 5.67758 19.2231 6.33355 21.0936C6.98953 22.9641 8.04269 24.6611 9.41663 26.0617L17.5875 34.4692C17.7308 34.6176 17.9013 34.7354 18.0892 34.8157C18.277 34.8961 18.4785 34.9375 18.682 34.9375C18.8856 34.9375 19.0871 34.8961 19.2749 34.8157C19.4628 34.7354 19.6333 34.6176 19.7766 34.4692L27.9166 26.0617C29.2906 24.6611 30.3437 22.9641 30.9997 21.0936C31.6557 19.2231 31.898 17.2261 31.7091 15.2475ZM25.7583 23.8292L18.6666 31.1125L11.575 23.8292C10.5298 22.7557 9.72928 21.4578 9.23081 20.0288C8.73233 18.5997 8.54834 17.075 8.69204 15.5642C8.83668 14.0301 9.31143 12.5482 10.082 11.2256C10.8525 9.90299 11.8996 8.77278 13.1475 7.91666C14.7831 6.80079 16.703 6.20555 18.6666 6.20555C20.6302 6.20555 22.5502 6.80079 24.1858 7.91666C25.4299 8.76947 26.4747 9.89469 27.245 11.2115C28.0154 12.5283 28.4922 14.0039 28.6412 15.5325C28.7896 17.0484 28.6079 18.5793 28.1093 20.0142C27.6107 21.4491 26.8076 22.7522 25.7583 23.8292ZM18.6666 9.5C17.2945 9.5 15.9532 9.91787 14.8124 10.7008C13.6715 11.4837 12.7823 12.5965 12.2572 13.8984C11.7321 15.2003 11.5947 16.6329 11.8624 18.015C12.1301 19.3971 12.7908 20.6667 13.7611 21.6631C14.7313 22.6596 15.9674 23.3382 17.3132 23.6131C18.6589 23.888 20.0538 23.7469 21.3215 23.2076C22.5892 22.6684 23.6726 21.7551 24.4349 20.5834C25.1972 19.4117 25.6041 18.0342 25.6041 16.625C25.6001 14.7366 24.8678 12.9268 23.5677 11.5915C22.2675 10.2562 20.5053 9.50418 18.6666 9.5ZM18.6666 20.5833C17.9043 20.5833 17.1592 20.3512 16.5254 19.9162C15.8916 19.4813 15.3976 18.8631 15.1058 18.1398C14.8141 17.4165 14.7378 16.6206 14.8865 15.8528C15.0352 15.0849 15.4023 14.3796 15.9413 13.826C16.4803 13.2724 17.1671 12.8955 17.9147 12.7427C18.6623 12.59 19.4373 12.6684 20.1416 12.968C20.8458 13.2676 21.4477 13.7749 21.8712 14.4259C22.2947 15.0768 22.5208 15.8421 22.5208 16.625C22.5208 17.6748 22.1147 18.6816 21.3919 19.424C20.6691 20.1663 19.6888 20.5833 18.6666 20.5833Z"
                        fill="#581ff8"
                      />
                    </svg>
                  </span>
                  <p class="text-2xl font-extrabold text-dark-grey-900">
                    Location
                  </p>
                  <p class="text-base leading-7 text-dark-grey-600">
                    Find us at our office
                  </p>
                  <a
                    class="text-lg font-bold text-purple-blue-500"
                    target="_blank"
                    href="#"
                    >Jalan RS. Fatmawati Raya, Pondok Labu, Cilandak, South
                    Jakarta City, Jakarta 12450</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 my-5">
          <div class="w-full max-w-full sm:w-3/4 mx-auto text-center"></div>
        </div>
      </main>
    </section>
    <!-- component -->
    <div
      id="team"
      class="section relative pt-20 pb-8 md:pt-16 bg-white dark:bg-gray-800"
    >
      <div class="container xl:max-w-6xl mx-auto px-4">
        <!-- section header -->
        <header class="text-center mx-auto mb-12">
          <h2
            class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100"
          >
            <span class="font-light">Our</span> Team
          </h2>
          <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 100 60"
            style="margin: 0 auto; height: 35px"
            xml:space="preserve"
          >
            <circle
              cx="50.1"
              cy="30.4"
              r="5"
              class="stroke-primary"
              style="fill: transparent; stroke-width: 2; stroke-miterlimit: 10"
            ></circle>
            <line
              x1="55.1"
              y1="30.4"
              x2="100"
              y2="30.4"
              class="stroke-primary"
              style="stroke-width: 2; stroke-miterlimit: 10"
            ></line>
            <line
              x1="45.1"
              y1="30.4"
              x2="0"
              y2="30.4"
              class="stroke-primary"
              style="stroke-width: 2; stroke-miterlimit: 10"
            ></line>
          </svg>
        </header>
        <!-- end section header -->
        <!-- row -->
        <div class="flex flex-wrap flex-row -mx-4 justify-center">
          <div
            class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6"
          >
            <div
              class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12 hover-grayscale-0 wow fadeInUp"
              data-wow-duration="1s"
              style="
                visibility: visible;
                animation-duration: 1s;
                animation-name: fadeInUp;
              "
            >
              <!-- team block -->
              <div class="relative overflow-hidden px-6">
                <img
                  src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar4.png"
                  class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale"
                  alt="title image"
                />
              </div>
              <div class="pt-6 text-center">
                <p class="text-lg leading-normal font-bold mb-1">
                  Rofief Amanulloh
                </p>
                <p class="text-gray-500 leading-relaxed font-light">
                  Front End Developer
                </p>
                <!-- social icon -->
                <div class="mt-2 mb-5 space-x-2">
                  <a
                    class="hover:text-blue-700"
                    aria-label="Twitter link"
                    href="#"
                  >
                    <!-- <i class="fab fa-twitter text-twitter"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Facebook link"
                    href="#"
                  >
                    <!-- <i class="fab fa-facebook text-facebook"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Instagram link"
                    href="#"
                  >
                    <!-- <i class="fab fa-instagram text-instagram"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Linkedin link"
                    href="#"
                  >
                    <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- end team block -->
          </div>
          <div
            class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6"
          >
            <!-- team block -->
            <div
              class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12 hover-grayscale-0 wow fadeInUp"
              data-wow-duration="1s"
              data-wow-delay=".1s"
              style="
                visibility: visible;
                animation-duration: 1s;
                animation-delay: 0.1s;
                animation-name: fadeInUp;
              "
            >
              <div class="relative overflow-hidden px-6">
                <img
                  src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar2.png"
                  class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale"
                  alt="title image"
                />
              </div>
              <div class="pt-6 text-center">
                <p class="text-lg leading-normal font-bold mb-1">
                  Aditya Ega Pratama
                </p>
                <p class="text-gray-500 leading-relaxed font-light">
                  Back End Developer
                </p>
                <!-- social icon -->
                <div class="mt-2 mb-5 space-x-2">
                  <a
                    class="hover:text-blue-700"
                    aria-label="Twitter link"
                    href="#"
                  >
                    <!-- <i class="fab fa-twitter text-twitter"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Facebook link"
                    href="#"
                  >
                    <!-- <i class="fab fa-facebook text-facebook"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Instagram link"
                    href="#"
                  >
                    <!-- <i class="fab fa-instagram text-instagram"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Linkedin link"
                    href="#"
                  >
                    <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- end team block -->
          </div>
          <div
            class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6"
          >
            <!-- team block -->
            <div
              class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12 hover-grayscale-0 wow fadeInUp"
              data-wow-duration="1s"
              data-wow-delay=".3s"
              style="
                visibility: visible;
                animation-duration: 1s;
                animation-delay: 0.3s;
                animation-name: fadeInUp;
              "
            >
              <div class="relative overflow-hidden px-6">
                <img
                  src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar1.png"
                  class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale"
                  alt="title image"
                />
              </div>
              <div class="pt-6 text-center">
                <p class="text-lg leading-normal font-bold mb-1">
                  Faiz Firstian N
                </p>
                <p class="text-gray-500 leading-relaxed font-light">
                  Front End Developer
                </p>
                <!-- social icon -->
                <div class="mt-2 mb-5 space-x-2">
                  <a
                    class="hover:text-blue-700"
                    aria-label="Twitter link"
                    href="#"
                  >
                    <!-- <i class="fab fa-twitter text-twitter"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Facebook link"
                    href="#"
                  >
                    <!-- <i class="fab fa-facebook text-facebook"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Instagram link"
                    href="#"
                  >
                    <!-- <i class="fab fa-instagram text-instagram"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Linkedin link"
                    href="#"
                  >
                    <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- end team block -->
          </div>
          <div
            class="flex-shrink max-w-full px-4 w-2/3 sm:w-1/2 md:w-5/12 lg:w-1/4 xl:px-6"
          >
            <!-- team block -->
            <div
              class="relative overflow-hidden bg-white dark:bg-gray-800 mb-12 hover-grayscale-0 wow fadeInUp"
              data-wow-duration="1s"
              data-wow-delay=".5s"
              style="
                visibility: visible;
                animation-duration: 1s;
                animation-delay: 0.5s;
                animation-name: fadeInUp;
              "
            >
              <div class="relative overflow-hidden px-6">
                <img
                  src="https://tailone.tailwindtemplate.net/src/img/dummy/avatar4.png"
                  class="max-w-full h-auto mx-auto rounded-full bg-gray-50 grayscale"
                  alt="title image"
                />
              </div>
              <div class="pt-6 text-center">
                <p class="text-lg leading-normal font-bold mb-1">
                  M. Alif Nadin P
                </p>
                <p class="text-gray-500 leading-relaxed font-light">
                  UI/UX Designer
                </p>
                <!-- social icon -->
                <div class="mt-2 mb-5 space-x-2">
                  <a
                    class="hover:text-blue-700"
                    aria-label="Twitter link"
                    href="#"
                  >
                    <!-- <i class="fab fa-twitter text-twitter"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Facebook link"
                    href="#"
                  >
                    <!-- <i class="fab fa-facebook text-facebook"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Instagram link"
                    href="#"
                  >
                    <!-- <i class="fab fa-instagram text-instagram"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"
                      ></path>
                    </svg>
                  </a>
                  <a
                    class="hover:text-blue-700"
                    aria-label="Linkedin link"
                    href="#"
                  >
                    <!-- <i class="fab fa-linkedin text-linkedin"></i> -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="inline-block"
                      width="1rem"
                      height="1rem"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- end team block -->
          </div>
        </div>
        <!-- end row -->
      </div>
    </div>

     <!-- Footer -->
     <div class="max-w-screen max-h-96 mx-auto">
	<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
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
							<a href="#aboutus" target="_blank"
								class="text-gray-600 hover:underline dark:text-gray-400">About Us</a>
						</li>
					</ul>
				</div>
				<div>
          <a href="catalog.php">
					  <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Shopping</h3>
          </a>
					<ul>
						<li class="mb-4">
							<a href="catalog.php" target="_blank"
								class="text-gray-600 hover:underline dark:text-gray-400">Product</a>
						</li>
						<li>
							<a href="cart.php" target="_blank"
								class="text-gray-600 hover:underline dark:text-gray-400">Cart</a>
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
			<span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com" target="_blank" class="hover:underline">Feartee™</a>. All Rights Reserved.
</span>
			<div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
				<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd"
							d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
							clip-rule="evenodd"></path>
					</svg>
				</a>
				<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd"
							d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
							clip-rule="evenodd"></path>
					</svg>
				</a>
				<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path
							d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
						</path>
					</svg>
				</a>
				<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd"
							d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
							clip-rule="evenodd"></path>
					</svg>
				</a>
				<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd"
							d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
							clip-rule="evenodd"></path>
					</svg>
				</a>
			</div>
		</div>
	</footer>
  </div>

    <!-- Icons -->
    <script>
      feather.replace();
    </script>

    <!-- MY JS -->
    <script src="script.js"></script>
    <script src="tailwind-color.js"></script>
    <script src="animate.js"></script>
  </body>
</html>
