<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<?php
    if(is_front_page()):
        $classes = array('class-home');
    else:
        $classes = array('class-not-home');
    endif;
?>

<body <?php body_class($classes); ?>>
    <?php wp_nav_menu(array('theme_location'=>'primary')) ?>