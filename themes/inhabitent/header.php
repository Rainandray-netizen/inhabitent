<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<div class="websitebody">

<?php $slug = basename(get_permalink()); 
    echo $slug?>

    <header class="header">
        <a href="/inhabitent">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logos/inhabitent-logo-tent.svg" alt="#">
         </a>
        
        <?php wp_nav_menu(array(
            "theme_location" => "Primary",
            "menu"=>"main"
        ));?>
        <?php echo get_search_form(); ?>
    </header>
    <hr class="solidline nomargin">

    
