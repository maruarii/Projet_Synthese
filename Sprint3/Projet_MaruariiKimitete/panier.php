<?php
    require_once("action/panierAction.php");

    $action = new panierAction();
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
    
    <div class="container-main-panier">
        <div class="container-panier-fav">
            <div class="container-panier">
                <div class="panier-title">Panier</div>
                    <?php
                    $i = 0;
                    ?>
                    <?php while ($i < $data["sizePanier"]) { ?>
                    <div class="box-panier">
                        <div class="panier-image">
                            <img src="<?= $data["resultatPanier"][$i]["prd_image"] ?>" alt="">
                        </div>
                        <div class="panier-desc">
                            <div class="desc-section1">
                                <div class="desc-name">
                                    <?= $data["resultatPanier"][$i]["prd_name"] ?>
                                </div>
                                <div class="desc-price">
                                    <?= $data["resultatPanier"][$i]["prd_price"]."$" ?>
                                </div>
                            </div>

                            <div class="desc-section2">
                                <div class="desc-section2-desc">
                                    <?= $data["resultatPanier"][$i]["prd_desc"] ?>
                                </div>
                            </div>

                                <form class="desc-section3" action="panier.php?product=<?=$data["resultatPanier"][$i]["bag_id"]?>" method="post">
                                    <input type="submit" name="addfav" value="Add to Favorite" class="desc-section-button">                   
                                    </input>
                                    <input type="submit" name="deleteBag" value="Delete Item" class="desc-section-button">
                                        
                                    </input>
                                </form>
            
                        </div>
                </div>
                <?php  ++$i ?>
                <?php }  ?>
            </div>


            <div class="container-panier">
                <div class="panier-title">Favorite</div>
                <?php
                    $i = 0;
                 ?>
                <?php while ($i < $data["sizeFavorite"]) { ?>
                        <div class="box-panier">
                            <div class="panier-image">
                                <img src="<?= $data["resultatfavorite"][$i]["prd_image"] ?>" alt="">
                            </div>
                            <div class="panier-desc">
                                <div class="desc-section1">
                                    <div class="desc-name">
                                        <?= $data["resultatfavorite"][$i]["prd_name"] ?>
                                    </div>
                                    <div class="desc-price">
                                        <?= $data["resultatfavorite"][$i]["prd_price"]."$" ?>
                                    </div>
                                </div>

                                <div class="desc-section2">
                                    <div class="desc-section2-desc">
                                        <?= $data["resultatfavorite"][$i]["prd_desc"] ?>
                                    </div>
                                </div>

                                <form class="desc-section3" action="panier.php?product=<?=$data["resultatfavorite"][$i]["fav_id"]?>" method="post">
                                    <input type="submit" name="addBag" value="Add to bag" class="desc-section-button">                   
                                    </input>
                                    <input type="submit" name="deleteFav" value="Delete Item" class="desc-section-button">         
                                    </input>
                                </form>
                            </div>
                    </div>
                    <?php  ++$i ?>
                    <?php }  ?>
                    </div>
                </div>
        
        <div class="container-recapitulatif">
            <div class="recap-section1">
                Récapitulatif
            </div>
            <div class="recap-section2">
                <div class="txt-recap-section2">
                    Sous-total
                </div>
                <div class="price-section2">
                    <?= $data["SousTotalPrice"]." "."$" ?>
                </div>
            </div>
            <div class="recap-section2">
                <div class="txt-recap-section2">
                    Frais estimés de prise en charge et d'expédition
                </div>
                <div class="price-section2">
                    FREE
                </div>
            </div>
            <div class="recap-section2">
                <div class="txt-recap-section2">
                    Taxes
                </div>
                <div class="price-section2">
                    <?= $data["tax"]." "."$" ?> 
                </div>
            </div>
            <div class="recap-section3">
                <div class="txt-recap-section2">
                    TOTAL
                </div>
                <div class="price-section2">
                    <?= $data["totalWithTax"]." "."$" ?> 
                </div>
            </div>
            <div class="recap-section4">
                <div class="button-recap-section2">
                    TOTAL
                </div>
                <div class="button-paypal-recap-section2">
                   PAYPAL
                </div>
            </div>
        </div>
    </div>
<?php
