<?php
include DIR_TEMPLATE . "page_nav.php";
include DIR_TEMPLATE . "page_registration.php";


if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $name = $_POST['username'];
    $pass = $_POST['password'];


    $s = "SELECT * FROM users WHERE username = '" . $name . "' AND email = '" . $email . "' LIMIT 1";
    $result = mysqli_query($connect, $s);

    $reg = "INSERT INTO users (username, password, email) VALUES ('$name', '$pass', '$email')";
    mysqli_query($connect, $reg);
    header('location: index.php?page=login');

}

?>

