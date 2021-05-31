<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniqueShoes</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="stylesheet" href="css/aboutStyle.css">
    <link rel="stylesheet" href="css/shopSelectStyle.css">
    <link rel="stylesheet" href="css/panierStyle.css">
    <link rel="stylesheet" href="css/style-partial.css">

    <script src="js/javascripte.js"></script>
    <script src="js/animation/animation-slider.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>
<body>

<header>
    <div class = "container-navBar">
        <div class = "logo-header">
            <!-- <a href="####"><img src="images/images-partial/logo.png"></a> -->
        </div>

        <div class="navBar-middle">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT US</a>
            <a href="shop.php">SHOP</a>
            <a href="login.php">LOGIN</a>
        </div>

        <div class="navBar-right">
                
                <?php
                    if (!empty($_SESSION["users_id"]))
                    {
                ?>
                    <a href="panier.php">BAG </a>
                    <a href="index.php?deco=1"><img src="images/deco.png" alt=""> </a>
                <?php
                    }
                ?>
                <!-- <a href="profile.php">Profile</a> -->
        </div>
    </div>

    <div class="container-header">
        <div class="container-header-section1">
            <div class="title-position-header">
                <div class="title-part1">
                    UNIQUE
                </div>
                <div class="title-part2">
                    SHOES
                </div>
            </div>
            <div class="quote-position-header">
                <div class="quote-section">
                    Life is to short
                </div>
                <div class="quote-section">
                    to wear 
                </div>
                <div class="quote-section">
                    Boring Shoes
                </div>
            </div>
        </div>
        <div class="container-header-section2">
            <div class="container-img-header">
                <img src="images/images-partial/shoes-black.png">
            </div>
            <div class="container-name-shoes">
                <div class="name-section3">
                    Jordan 1 Retro Black White
                </div>
                <div class="name-section3">
                    Men's Shoes
                </div>
                <div class="button-section3">
                    <a href="shop.php">SHOP NOW</a>
                </div>
            </div>
        </div>
        
    </div>
</header>
