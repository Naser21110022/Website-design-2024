<?php
include '../Auth/connect.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $id = $_GET["id"];
    $quantity = $_GET['Product_Quantity'];

    $sql = "update orders set product_quantity=$quantity where id=$id;";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: ../Cart/cart.php');
    } else {
        die(mysqli_error($con));
    }
}

?>