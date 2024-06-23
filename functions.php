<?php
$DBCONNECT = mysqli_connect("localhost", "root", "", "testing");

function query($query)
{
    global $DBCONNECT;
    $result = mysqli_query($DBCONNECT, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function queryInsert($query)
{
    global $DBCONNECT;
    return mysqli_query($DBCONNECT, $query);
}

function login($data)
{
    $emailInput = $data["email"];
    $passwordInput = $data["password"];
    $query = "SELECT * FROM users WHERE email = '$emailInput'";
    $user = query($query);
    if ($user !== []) {
        $user = $user[0];
        if ($user["email"] === $emailInput && password_verify($passwordInput, $user["password"])) {
            return $user;
        }
    }
    return NULL;
}

function register($data)
{
    global $DBCONNECT;

    $email = $data["email"];
    $username = $data["username"];
    $password = password_hash($data["password"], PASSWORD_DEFAULT);


    $emailExist = query("SELECT * FROM users WHERE email = '$email'");
    if ($emailExist !== []) {
        return -2;
    }

    $query = "INSERT INTO users (email, password, username, isAdmin) 
                        VALUES 
                    ('$email','$password', '$username', 0)";

    if (mysqli_query($DBCONNECT, $query)) {
        return mysqli_affected_rows($DBCONNECT);
    } else {
        return -1;
    };
}

function hapus($nim)
{
    global $DBCONNECT;
    $query = "DELETE FROM mahasiswa WHERE mahasiswa.nim = $nim";

    mysqli_query($DBCONNECT, $query);

    return mysqli_affected_rows($DBCONNECT);
}

function ubah($data)
{
    global $DBCONNECT;

    $nimBefore = $data["nimBefore"];
    $nim = $data["nim"];
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];

    $query = "  UPDATE mahasiswa
                SET nim = '$nim', nama ='$nama', jurusan = '$jurusan'
                WHERE nim = '$nimBefore';
    ";

    mysqli_query($DBCONNECT, $query);

    return mysqli_affected_rows($DBCONNECT);
}

function search($param)
{
    global $DBCONNECT;
    $query = "SELECT * FROM mahasiswa
                WHERE nim LIKE '%$param%'
                    OR nama LIKE '%$param%'
                    OR jurusan LIKE '%$param%'";

    $result = mysqli_query($DBCONNECT, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// array(1) { ["productImage"]=> array(6) { ["name"]=> string(22) "filosofi teras (1).jpg" ["full_path"]=> string(22) "filosofi teras (1).jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(24) "C:\xampp\tmp\php3D3F.tmp" ["error"]=> int(0) ["size"]=> int(177108) } }
//array(5) { ["productName"]=> string(8) "Machiato" ["productPrice"]=> string(5) "30000" ["productDescription"]=> string(33) "Aweawdawd awdw adwa dwd awd awdaw" ["item_size"]=> string(0) "" ["submitProduct"]=> string(0) "" }

function registerProduct($data, $files)
{
    global $DBCONNECT;
    // ambil nama product, harga, deskripsi
    $namaProduct = htmlspecialchars($data["productName"]);
    $hargaProduct = htmlspecialchars($data["productPrice"]);
    $productDescription = htmlspecialchars($data["productDescription"]);
    $productSizeId = htmlspecialchars($data["item_size"]);
    $productStock = htmlspecialchars($data["productStock"]);
    $productImage = $files["productImage"];

    // cek apakah produk sudah terdaftar apa belum
    $searchProductQuery =  "SELECT * FROM products where nama = '$namaProduct'";
    $product = query($searchProductQuery);
    if ($product !== []) {
        $product = $product[0];
        $searchProductSizeQuery =  "SELECT * FROM product_size where product_id = '{$product['id']}' AND size_id = {$productSizeId}";
        $productSize = query($searchProductSizeQuery);
        if ($productSize !== []) {
            return -1;
        }
        $insertQueryToProductSize = "INSERT INTO `product_size`( `product_id`, `size_id`, `stock`) VALUES ('{$product['id']}','$productSizeId','$productStock')";
        $resultQuery = queryInsert($insertQueryToProductSize);
        if ($resultQuery) {
            return 1;
        }
    } else {
        // PROSES GAMBAR

        // cek apakah tipe gambar sudah sesuai
        $fileTypes = ["jpg", "png"];
        $fileRaw = $productImage["name"];
        $extractFileType = explode(".", $fileRaw);
        $fileType = end($extractFileType);
        if (!in_array($fileType, $fileTypes)) {
            return -2;
        }

        // Generate unique filename
        $uniqueFilename = uniqid() . '.' . $fileType;

        //masukan data ke dalam database
        $insertProductQuery = "INSERT INTO `products`(`nama`, `harga`, `deskripsi`, `gambar`, `isDeleted`) VALUES ('{$namaProduct}','$hargaProduct','$productDescription','$uniqueFilename', 0)";
        $resultInsertProduct = queryInsert($insertProductQuery);
        if ($resultInsertProduct) {
            $productId = mysqli_insert_id($DBCONNECT);
            // ambil gambar dan pindahkan ke dalam folder
            move_uploaded_file($productImage["tmp_name"], "img/baju part2/" . $uniqueFilename);
            $insertQueryToProductSize = "INSERT INTO `product_size`( `product_id`, `size_id`, `stock`) VALUES ('$productId','$productSizeId','$productStock')";
            if (queryInsert($insertQueryToProductSize)) {
                return 1;
            }
        }
    }
}


function updateProduct1($data, $file)
{
    global $DBCONNECT;

    $productId = htmlspecialchars($data["productId"]);
    $productName = htmlspecialchars($data["productName"]);
    $productDescription = htmlspecialchars($data["productDescription"]);
    $productPrice = htmlspecialchars($data["productPrice"]);

    // Fetch current product information
    $query = "SELECT gambar FROM products WHERE id = $productId";
    $result = mysqli_query($DBCONNECT, $query);
    $currentProduct = mysqli_fetch_assoc($result);
    $currentImage = $currentProduct['gambar'];

    // Check if admin updates image
    if ($file["productImage"]["name"] !== "") {
        // Delete old image
        if (file_exists("img/baju part2/" . $currentImage)) {
            unlink("img/baju part2/" . $currentImage);
        }

        // Validate and upload new image
        $fileTypes = ["jpg", "png"];
        $fileRaw = $file["productImage"]["name"];
        $extractFileType = explode(".", $fileRaw);
        $fileType = end($extractFileType);
        if (!in_array($fileType, $fileTypes)) {
            return -2;
        }

        // Generate unique filename
        $uniqueFilename = uniqid() . '.' . $fileType;
        $imageTmpName = $file["productImage"]["tmp_name"];
        $imagePath = "img/baju part2/" . $uniqueFilename;
        move_uploaded_file($imageTmpName, $imagePath);

        // Update product with new image
        $query = "UPDATE products SET 
                  nama = '$productName', 
                  deskripsi = '$productDescription', 
                  harga = '$productPrice', 
                  gambar = '$uniqueFilename' 
                  WHERE id = $productId";
        mysqli_query($DBCONNECT, $query);
    } else {
        // Update product without changing the image
        $query = "UPDATE products SET 
                  nama = '$productName', 
                  deskripsi = '$productDescription', 
                  harga = '$productPrice' 
                  WHERE id = $productId";
        mysqli_query($DBCONNECT, $query);
    }

    // Check if admin updates stock of product size
    if ($data["productSizeId"] !== "") {
        $productSizeId = htmlspecialchars($data["productSizeId"]);
        $productStock = htmlspecialchars($data["productStock"]);
        $query = "UPDATE product_size SET stock = '$productStock' WHERE id = $productSizeId";
        mysqli_query($DBCONNECT, $query);
    }

    return 1;
}

function deleteProduct($productId){
    global $DBCONNECT;
    $queryProductDelete = "UPDATE `products` SET `isDeleted`= 1 WHERE id = $productId";
    
    mysqli_query($DBCONNECT, $queryProductDelete);
    return mysqli_affected_rows($DBCONNECT);
}

function formatRupiah($angka)
{
    // Format angka menjadi Rupiah
    $hasilRupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasilRupiah;
}
