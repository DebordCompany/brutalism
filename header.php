<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme-wordpress</title>
    <?php  wp_head( ) ?>
</head>
<body >
    <h3> </h3>
    <section class="main">
        <header>
       <div class="header_logo">
        <h1 class="header_h1_logo"><a href="/">MERCADITO DE LA PLAZA</a> </h1>
        <div class="header_menu " id="boton" >
        <img  src="assets/menu.png" alt="" class="header_menu_img " id="rotate">
       </div>
       </div> 
       
       
        <!--  
         <ul class="header_nav_ul" id="menuStyle">
            
            <li class="header_nav_li"><a href="">INICIO</a> </li>
            <li class="header_nav_li"><a href="">POLLO</a> </li>
            <li class="header_nav_li"><a href="">VACA</a> </li>
            <li class="header_nav_li"><a href="">CERDO</a> </li>
            <li class="header_nav_li"><a href="">ULTRAMARINOS</a> </li>
         </ul> -->
        <?php wp_nav_menu(array( 
            'theme-location' =>'superior',
            'container' => 'nav',
            'container_class'=>'header_nav ',
            'container_id' =>'menu',
            'items_wrap' => '<ul class="header_nav_ul" id="menuStyle">%3$s</ul>',
            'menu_class' => 'header_nav_li'

        )); ?>
      

       
    </header>

    <hr class="hr">