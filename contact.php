<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet"> 
    <title>Contact</title>
</head>
<body>
    <header>
        <nav>
            <?php
            <a href="<?php
                    $name='Home';
                    $link='index.php'; 
                    $current_page=true;
                    echo $link;
            ?>"><?php //

            if( $current_page ) 
            echo ' class="menu_item active"'; 
            echo $name;
            ?></a>

            <?php
            <a href="<?php
                    $name='About';
                    $link='about.php'; 
                    $current_page=true;
                    echo $link;
            ?>"><?php //

            if( $current_page ) 
            echo ' class="menu_item"'; 
            echo $name;
            ?></a>

            <?php
            <a href="<?php
                    $name='Contact';
                    $link='contact.php'; 
                    $current_page=true;
                    echo $link;
            ?>"><?php //

            if( $current_page ) 
            echo ' class="menu_item"'; 
            echo $name;
            ?></a>
        </nav>
    </header>
    <section class="contact">
        <h2 class="title">contact</h2>
        <form class="main_form">
            <input type="text" name="name" id="name" placeholder="Your name">
            <textarea name="message" id="message" placeholder="Your message"></textarea>
            <button>Send</button>
        </form>
    </section>
    <footer>
        <p>Copyright © 2020 All Rights Reserved</p>
    </footer>
</body>
</html>