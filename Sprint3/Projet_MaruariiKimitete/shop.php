<?php
    require_once("action/shopAction.php");

    $action = new shopAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>

    <div class="titre-section">SHOP</div>
    <div class="section-filter">
        <div class="titre-filter">All Feature</div>
        <div class="container-button-filter">
            <div class="button-filter-1">  </div>
            <div class="button-filter-2">
                <div class="container-button-filter-2">
                    <div class="button1-filter2">
                       <div class="txt-button-filter">FILTER</div> 
                    </div>
                </div>
                <div class="container-button-filter-2">
                    <div class="dropdown">
                        <div class="txt-button-filter">SORT:BYFEATURE</div> 
                        <div class="dropdown-content">
                            <a href="">ALL FEATURE</a>
                            <a href="">SORT BY: NEWEST</a>
                            <a href="">PRICE LOW TO HIGH</a>
                            <a href="">PRICE HIGH TO LOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section-product">

    <?php
    $i = 0;
    ?>
    <?php while ($i < $data["count"]) { ?>
        <a class="box-shop" href="shop-select.php?product=<?=$i?>">        
            <div class="container-img-shop">
                <img src="<?= $data["resultat"][$i]["prd_image"] ?>" alt="">
            </div>
            <div class="container-name">
                <?= $data["resultat"][$i]["prd_name"] ?>
            </div>
            <div class="container-desc">
                <?= $data["resultat"][$i]["prd_desc"] ?>
            </div>
            <div class="container-price">
                <?= $data["resultat"][$i]["prd_price"]."$" ?>
            </div>
            <div class="container-rate">
                ongoing
            </div>
        </a>
    <?php  ++$i ?>
    <?php }  ?>
    </div>

<?php