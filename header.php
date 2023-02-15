<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Ex1</title>
    <?php wp_head();?>
</head>
<header>
    <img src="http://localhost/31w/wp-content/uploads/2023/02/safoora.png" alt="">
    <?php wp_nav_menu(array('menu'=> 'entete',
    'container' => 'nav'))?>
   
    <h1><?php //bloginfo('name')?></h1>
    <h2><?php //bloginfo('description')?></h2>
    <h2><?php bloginfo('url')?></h2>
    <h1><a href="<?php bloginfo('name')?><?php bloginfo('url')?>"></a></h1>
    <h2><?php bloginfo('description')?></h2>

</header>
<body>