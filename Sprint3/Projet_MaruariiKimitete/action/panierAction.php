<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/productDao.php");


    class panierAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $resultatPanier = ProductDAO::getAllProductUser($_SESSION["users_id"]);
            $sizePanier = Count($resultatPanier);  

            $resultatfavorite = ProductDAO::getAllFavProductUser($_SESSION["users_id"]);
            $sizeFavorite = Count($resultatfavorite);

            $tax = 15/100;      
            $SousTotalPrice = 0;
            

            if (!empty($_GET["product"])) 
            {
                $_SESSION["productIdPanier"] = (int)$_GET["product"];
                $productId = $_SESSION["productIdPanier"];
            }

            for ($i=0; $i < $sizePanier; $i++) { 
                $SousTotalPrice += $resultatPanier[$i]["prd_price"];
            }

            $tax = $SousTotalPrice *  $tax;
            $totalWithTax = $SousTotalPrice + $tax;

            if (isset($_POST['deleteBag'])) 
            {
                ProductDAO::deleteBag($productId);
                header("Location: panier.php");
            }
            if (isset($_POST['deleteFav'])) 
            {
                ProductDAO::deleteFav($productId);
                header("Location: panier.php");
            }
            if (isset($_POST['addBag'])) 
            {
                ProductDAO::addBagUsers($_SESSION["productIdPanier"]+1,$_SESSION["users_id"],1);
                header("Location: panier.php");
            }
            if (isset($_POST['addFav'])) 
            {
                ProductDAO::addFavUsers($_SESSION["productIdPanier"]+1,$_SESSION["users_id"],1);
                header("Location: panier.php");
            }

            return compact("resultatPanier","sizePanier","SousTotalPrice","tax","totalWithTax","resultatfavorite","sizeFavorite");
        }
    }