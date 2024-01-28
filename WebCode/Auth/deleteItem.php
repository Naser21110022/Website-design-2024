<?php
include("../Auth/connect.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "delete from orders where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: ../Cart/Cart.php');

    } else {
        die(mysqli_error($con));
    }
}

?>