<?php
    require_once("action/CommonAction.php");

    class indexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            if(!empty($_GET["deco"]))
            {
                session_destroy ();
                header("Location: index.php");
            }
            return [];
        }
    }