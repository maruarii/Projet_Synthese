<?php
    require_once("action/shopSelectAction.php");

    $action = new shopSelectAction();
    $data = $action->execute();
?>

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

    <div class="container-main-select">
        <div class="container-main-img">
            <div class="select-button-return" onclick="redirectShopButton()">
                return Shop
            </div>
            <div class="select-position-img">
                <div class="select-image">
                    <div class="select-image-brand">
                        <img src="<?= $data["resultat"]["brand_image"] ?>" alt="">
                    </div>
                    <img src="<?= $data["resultat"]["prd_image"] ?>" alt="">

                </div>
                <div class="select-image">
                    <div class="select-image-brand">
                        <img src="<?= $data["resultat"]["brand_image"] ?>" alt="">
                    </div>
                    <img src="<?= $data["resultat"]["prd_image"] ?>" alt="">

                </div>
            </div>     
        </div>
        <div class="container-main-desc">
            <div class="main-desc-section1">
                <div class="section1-gender">
                Men's Running Shoe
                </div>
                <div class="section1-price">
                <?= $data["resultat"]["prd_price"]."$" ?>

                </div>
            </div>
            <div class="main-desc-section2">
                <div class="section2-name">
                <?= $data["resultat"]["prd_name"] ?>
                </div>
            </div>
            <div class="main-desc-section3">
                <div class="section3-txt">
                Select size :
                </div>
            </div>
            <div class="main-desc-section4">
                <div class="box-size">
                    US 6 
                </div>
                <div class="box-size">
                    US 6.5
                </div>
                <div class="box-size">
                    US 7
                </div>
                <div class="box-size">
                    US 7.5
                </div>
                <div class="box-size">
                    US 8
                </div>
                <div class="box-size">
                    US 8.5
                </div>
                <div class="box-size">
                    US 9
                </div>
                <div class="box-size">
                    US 9.5
                </div>
                <div class="box-size">
                    US 10
                </div>
                <div class="box-size">
                    US 10.5
                </div>
                <div class="box-size">
                    US 11
                </div>
                <div class="box-size">
                    US 11.5
                </div>
                <div class="box-size">
                    US 12
                </div>
                <div class="box-size">
                    US 12.5
                </div>
                <div class="box-size">
                    US 13
                </div>
                <div class="box-size">
                    US 14
                </div>
                <div class="box-size">
                    US 15
                </div>
                <div class="box-size">
                    US 16
                </div>
            </div>
            <div class="main-desc-section5">
                <form class="main-desc-section5" action="shop-select.php" method="post">
                    <input type="submit" name="addBag" value="Add to Bag" class="button-section-5-bag">
                    </input>
                    <input type="submit" name="addFav" value="Add to Favorite" class="button-section-5-fav">
                    </input>
                </form>
            </div>
            <div class="main-desc-section6">
            . So new in fact, we were still breaking into the basketball scene and testing prototypes on the feet of our local team. 
            Of course, the design improved over the years, but the name stuck. The UniqueShoes Blazer Mid ’77 Vintage—classic since the beginning.
                </br></br>
                <li>Men's Running Shoe</li>
                <li>Style: CW7356-003</li>
            </div>
        </div>
    </div>
<?php
