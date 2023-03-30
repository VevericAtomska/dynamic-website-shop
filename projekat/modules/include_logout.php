<?php

include DIR_TEMPLATE . "page_nav.php";
include DIR_TEMPLATE . "page_logout.php";
session_destroy();
header('Location: index.php');

?>