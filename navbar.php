<nav class="my-navbar">
    <a href="index.php" class="my-navbar-logo">FEARTEE</a>
    <div class="my-navbar-nav">
        <a href="index.php">Home</a>
        <a href="#aboutus">About</a>
        <a href="catalog.php">Shopping</a>
        <a href="cart.php">Cart</a>
        <?php if (isset($_SESSION["auth"])) : ?>
            <a href="logout.php">Logout</a>
            <a href="order.php">Order</a>
        <?php else : ?>
            <a href="login.php">Login</a>
        <?php endif ?>
        <?php if (isset($_SESSION["auth"]["admin"])) : ?>
            <a href="admin.php">Admin</a>
        <?php endif ?>
    </div>

    <div class="my-navbar-extra">
        <input type="text" placeholder="Search" />
        <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>
</nav>

