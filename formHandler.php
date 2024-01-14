<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(empty($name)){
        exit;
        header("Location : ../contact.html");
    }

    header("Location : ../contact.html");
}