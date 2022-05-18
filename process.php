<?php 
if (isset($_POST['email'])) {
    $admin_email = "loloozmiar@gmail.com"
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    mail($admin_email,"New Form Submition", $message , '-' , $phone, "From:",$email); 
}