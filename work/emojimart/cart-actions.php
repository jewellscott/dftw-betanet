
<?php
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// echo "<pre>";
// var_dump($_SESSION);
// var_dump($_POST);
// die(); // Stop execution here

// $productId = $_POST['product_id'];

session_start(); 

$productId = $_POST['product_id'];

if ($_POST['action'] === 'increase') {
    if (!isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = 0;
    }
    $_SESSION['cart'][$productId]++;
} 
elseif ($_POST['action'] === 'decrease') {
    if (isset($_SESSION['cart'][$productId])) {
        if ($_SESSION['cart'][$productId] <= 1) {
            // if it's 0, completely remove it
            unset($_SESSION['cart'][$productId]);
        } else {
            $_SESSION['cart'][$productId]--;
        }
    }
}


// var_dump("Final cart state:", $_SESSION['cart']); 
// die();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

