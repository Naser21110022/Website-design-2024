<?php
require("connect.php");

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from users where username='$username' and password='$password';";
    $cakeDetails = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($cakeDetails);
    if ($row) {
        $_SESSION['privilleged'] = $username;
        header("location:../Home/home.php");
    } else {
        echo "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Sign In </title>
</head>

<header class="header">
  <div class="logo">
    <a href="../index.html">
      <img src="Logo.PNG" alt="Logo">
    </a>
  </div>
</header>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Sign In</h2>
            <form action="" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="login">Sign In</button>
                <a href="Signup.php"> Dont have an account? </a>
            </form>
        </div>
</body>

<footer class="footer">
  <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
</footer>

</html>