<?php
    include 'connect.php';
    if (!isset($_SESSION['email'])) {
      header('location: login.php');
    }
    if(isset($_GET['codeval'])){
        $item=$_GET['codeval'];
        $query = "SELECT product_name FROM product WHERE user_id=".$_SESSION['user_id']." AND product_code='$item'";
        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['product_name'];
        }
    }
    if(isset($_GET['priceval'])){
        $item=$_GET['priceval'];
        $query = "SELECT product_price FROM product WHERE user_id=".$_SESSION['user_id']." AND product_code='$item'";
        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['product_price'];
        }
    }
?> 