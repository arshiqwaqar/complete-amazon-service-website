<?php
require("config.php");

if(isset($_POST['submit'])){
    extract($_POST);
    $query = "INSERT INTO `new-clients`( `name`, `lastname`, `email`, `number`, `descmsg`, `service`, `amazonlistinglink`) VALUES ('$firstname','$lastname','$email','$number','$descmsg','$service','$url')";
    $result = mysqli_query($con,$query);

    if($result){
        echo "<script>alert('We Will Contact Your Shortly')</script>";
        header("location:contactus.php");
    }
    else{
        echo "<script>alert('Error!')</script>";
        header("location:contactus.php");

    }

}



?>