<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


include DIR_TEMPLATE . "page_nav.php";


$session_id = session_id();

$_SESSION['id'] = $session_id;
$_SESSION['server_name'] = $_SERVER['SERVER_NAME'];
$_SESSION['server_addr'] = $_SERVER['SERVER_ADDR'];
$_SESSION['server_port'] = $_SERVER['SERVER_PORT'];
$_SESSION['remote_addr'] = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['username'], $_POST['password'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];


    $name = mysqli_real_escape_string($connect, $name);
    $pass = mysqli_real_escape_string($connect, $pass);


    $s = "SELECT * FROM users WHERE username = '$name' LIMIT 1";
    $result = mysqli_query($connect, $s);

    if (mysqli_num_rows($result) == 1) {
       $logged_in_user = mysqli_fetch_assoc($result);
       $b = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $b['user_id'];

        if ($logged_in_user['user_type'] === 'admin') {
            $_SESSION['admin'] = $logged_in_user;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php?');
        } elseif ($logged_in_user['user_type'] !== 'member') {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');

        }
    }
}
include DIR_TEMPLATE . "page_login.php";
include DIR_TEMPLATE . "page_footer.php";
?>
