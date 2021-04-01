<?php


require __DIR__.'/../config/config.php';
require __DIR__. '/../config/DB.php';

spl_autoload_register(function($class){

    $class = str_replace('\\', '/', $class);
    var_dump($class);

    require $class.'.php';
})


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bedc8cf35d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/style/index.css">
    <?php
    if(isset($style)){
        echo '<link rel="stylesheet" href="'.$style.'">';
    } 
    ?>
    <title><?=$title?></title>
</head>
<body>
<div class="container">

<header>
    <a href="index.php">
        <h2><span>Monopoly en ligne</span></h2>
    </a>
    <nav>
        <ul>
        <a href="./rules.php"><li>Rules</li></a>
        <a href="./monopoly-wakfu.php"><li>Monopoly Wakfu</li></a>
        <a href=""><li>Monopoly League of Legends</li></a>
        </ul>
    </nav>
</header>