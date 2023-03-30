<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $standard_quantity = isset($_POST['standard']) ? $_POST['standard'] : 0;
    $left_behind_quantity = isset($_POST['left_behind']) ? $_POST['left_behind'] : 0;
    $edge_of_darkness_quantity = isset($_POST['edge_of_darkness']) ? $_POST['edge_of_darkness'] : 0;

    $standard_price_result = mysqli_query($connect, "SELECT price FROM products WHERE product_name = 'Standard'");
    $standard_price_row = mysqli_fetch_assoc($standard_price_result);
    $standard_price = isset($standard_price_row["price"]) ? $standard_price_row["price"] : 0;

    $left_behind_price_result = mysqli_query($connect, "SELECT price FROM products WHERE product_name = 'Left Behind'");
    $left_behind_price_row = mysqli_fetch_assoc($left_behind_price_result);
    $left_behind_price = isset($left_behind_price_row["price"]) ? $left_behind_price_row["price"] : 0;

    $edge_of_darkness_price_result = mysqli_query($connect, "SELECT price FROM products WHERE product_name = 'Edge of Darkness'");
    $edge_of_darkness_price_row = mysqli_fetch_assoc($edge_of_darkness_price_result);
    $edge_of_darkness_price = isset($edge_of_darkness_price_row["price"]) ? $edge_of_darkness_price_row["price"] : 0;

    $price = ($standard_quantity * $standard_price) + ($left_behind_quantity * $left_behind_price) + ($edge_of_darkness_quantity * $edge_of_darkness_price);

    $user_id = $_SESSION['user']['user_id'];
    //var_dump($user_id);
    $sql_check_user = "SELECT * FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($connect, $sql_check_user);
    if (mysqli_num_rows($result) == 0) {

        echo "Error: User not found";
    } else {

        $sql_provera=0;
        $sql2 = "INSERT INTO orders (user_id, product_name, quantity, price, order_date) 
            VALUES ";

        if($standard_quantity!=0) {$sql2 = $sql2 . "('$user_id', 'Standard', '$standard_quantity', '$standard_price', NOW()) "; $sql_provera=1;}
        if($left_behind_quantity!=0) { if($sql_provera==1) $sql2 = $sql2.","; $sql2= $sql2 . "('$user_id', 'Left Behind', '$left_behind_quantity', '$left_behind_price', NOW())"; $sql_provera=1;}
        if($edge_of_darkness_quantity!=0) { if($sql_provera==1) $sql2 = $sql2.","; $sql2= $sql2 . "('$user_id', 'Edge of Darkness', '$edge_of_darkness_quantity', '$edge_of_darkness_price', NOW())";}
        if (mysqli_query($connect, $sql2)) {
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($connect);
        }
    }

}
?>