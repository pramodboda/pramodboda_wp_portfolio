<?php /**
* =====================================================================
* header.php
* =====================================================================
*/

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo(charset);?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" class="<?bloginfo('description');?>">
	<title><?php wp_title('|', true, 'right' )?><?php bloginfo('name')?></title>

    <?php 
        $favicon = IMAGES . '/icons/favicon.ico';
        $touchicon = IMAGES . 'icons/apple-touch-icon-precomposed.png';  
    ?>

    <link rel="shortcut icon" href="<?php echo $favicon;?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $touchicon;?>">

    <?php wp_head();?>


</head>
<body <?php body_class();?>>
<!-- Navigation -->