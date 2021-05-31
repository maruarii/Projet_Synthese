    <?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/productDao.php");

    class shopSelectAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            if (!empty($_GET["product"])) 
            {
                $_SESSION["productId"] = (int)$_GET["product"];
                $productId = $_SESSION["productId"];
                $resultat = ProductDAO::getOneProduct($productId+1);
            }
            if (!empty($_SESSION["users_id"])) 
            {
                if (isset($_POST['addBag'])) 
                {
                    ProductDAO::addBagUsers($_SESSION["productId"]+1,$_SESSION["users_id"],1);
                    header("Location: shop.php");
                }
    
                if (isset($_POST['addFav'])) 
                {
                    ProductDAO::addFavUsers($_SESSION["productId"]+1,$_SESSION["users_id"],1);
                    header("Location: shop.php");
                }
            }
            else {
                if (isset($_POST['addBag'])) 
                {
                    header("Location: shop.php");
                }
    
                if (isset($_POST['addFav'])) 
                {
                    header("Location: shop.php");
                }
            }
            

            return compact("resultat");
        }
    }