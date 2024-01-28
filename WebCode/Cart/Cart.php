<?php
include ("../Auth/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles5.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>NJstore Homepage</title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="../Home/Home.php">Home</a></li>
        <li><a href="../Products/products.php">Products</a></li>
        <li><a href="../Aboutus/AboutUs.php">About Us</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
      <button class="signup-button" onclick="location.href='../Auth/logout.php'">Logout</button>
      
    </div>
  </header>

  <main class="main">
    <div class="content-container">

<?php   
                 session_start();
                 $user = $_SESSION['privilleged'];
                $sql = "select * from orders where username='$user';";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    $total = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $product_name = $row['product_name'];
                        $product_quantity = $row['product_quantity'];
                        $product_price = $row['product_price'] * $product_quantity;
                        $total += $product_price;
                        // echo $name;             
                        echo '
                        <tr>
                            <td>' . $product_name . '</td>
                            <td>' . $product_price . ' JD</td>
                            
                            <td>
                                <form action="../Auth/UpdateItem.php">
                                <input type="number"  name="Product_Quantity" value= ' . $product_quantity . '>
                                <input type="hidden" name="id" value= ' . $id . '>
                                <button type="submit" class="btn btn-primary"> Update</button>
                                </form>
                            </td>
                           
                            <td>
                            <button class="btn btn-danger"><a class="text-light" href="../Auth/deleteItem.php?id=' . $id . '">Delete</a></button>
                            </td>
                            </tr>';

                    }

                }
                ?>
      
    </div>
    <?php
         echo "<p class='total-text'>Total: $total JD</p>";
        ?>
  </main>
 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>