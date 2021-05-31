<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/productDao.php");


    class shopAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $resultat = ProductDAO::getAllProduct();
            $count = Count($resultat);

            return compact("resultat","count");
        }
    }