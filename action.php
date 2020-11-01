<?php        
    include "./db.setup.php";

    extract($_POST);
    $fullname = "$firstname $lastname";

    $query = "INSERT INTO `Customers` (`title`, `fullname`, `address`, `zipcode`, `city`, `phone`, `email`) VALUES ('$title','$fullname','$address','$zip','$city','$phone','$email');";
    $result = mysqli_query($link, $query);
    
    header("Location: index.php");
    die();
?>