
<?php
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// var_dump($_SESSION);
// var_dump($_POST);
// die(); 

session_start(); 
// start a new session, get the cookie if it exists

$productId = $_POST['product_id'];

if ($_POST['action'] === 'increase') {
    // if the product's not there, add it and set it to 0 to start with
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


// after the server updates the cart, go back to home
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

