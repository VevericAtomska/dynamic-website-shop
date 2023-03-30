<!doctype html>
<html lang="en">

<header>
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href='<?= DIR_CSS . 'style.css' ?>'>

</head>
<body>
<nav class="nav1">
<ul class="menu">
    <li><a href="index.php"  target="_self">Home</a>
    <li>
        <a href="index.php?page=gallery"  target="_self"  >Gallery</a> <marker></marker>
        <ol>
            <li><a href="index.php?page=gallery3" target="_self" >Maps</a></li>
            <li>
                <a href="index.php?page=gallery2" target="_self" >Bosses</a>

            </li>
        </ol>
    <li><a href="index.php?page=news">News</a>
    <li><a href="index.php?page=kdr">KDR Calculator</a>
    <li><a href="index.php?page=contact">Contact</a>
        <?php if (!isset($_SESSION ["admin"]) && !isset($_SESSION["user"])): ?>

    <li><a href="index.php?page=login">Login</a>
        <?php endif ?>
        <?php if (isset($_SESSION ["admin"]) || isset($_SESSION["user"])): ?>
    <li><a href= "index.php?page=logout">Logout </a>
            <?php endif ?>
</ul>
</nav>