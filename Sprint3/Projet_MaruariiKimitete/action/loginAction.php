<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/userDao.php");


    class loginAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() 
        {
            $hasConnectionError = false;

            if (isset($_POST["email"])) {
                $users = UserDAO::authenticate($_POST["email"], $_POST["pwd"]);

                if (!empty($users)) {
                    $_SESSION["users_id"] = $users["users_id"];
                    $_SESSION["visibility"] = $users["visibility"];
                }
                else {
                    $hasConnectionError = true;
                }
            }

            if (!empty($_POST["prenom"])) 
            {    
                $client = UserDAO::addClient($_POST["nom"],$_POST["prenom"],$_POST["email"], $_POST["pwd"],1);
            }

            return compact("hasConnectionError");
            
        }
    }