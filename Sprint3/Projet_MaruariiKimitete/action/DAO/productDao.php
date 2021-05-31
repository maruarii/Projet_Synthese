<?php
    require_once("action/DAO/Connection.php");

    class ProductDAO {

        public static function getAllProduct() {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT prd_name,prd_desc,prd_price,prd_image,brand_image FROM product AS b INNER JOIN prd_detail as a ON (b.prd_id=a.prd_id) INNER JOIN brand as c ON (b.prd_brand_id=c.brand_id)");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            $resultat = null;

            $resultat = $statement->fetchAll();

            return $resultat;
        }

        public static function getOneProduct($index) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT prd_name,prd_desc,prd_price,prd_image,brand_image FROM product AS b INNER JOIN prd_detail as a ON (b.prd_id=a.prd_id) INNER JOIN brand as c ON (b.prd_brand_id=c.brand_id) WHERE b.prd_id =  ".$index ." ");
            $statement->setFetchMode(PDO::FETCH_ASSOC); 
            $statement->execute();

            $resultat = null;

            $resultat = $statement->fetch();

            return $resultat;
        }

        public static function getAllProductUser($user) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM product AS b INNER JOIN prd_detail as a ON (b.prd_id=a.prd_id) INNER JOIN bag as c ON (b.prd_id=c.bag_prd_id) WHERE bag_users_id= ".$user."");
            $statement->setFetchMode(PDO::FETCH_ASSOC); 
            $statement->execute();

            $resultat = null;

            $resultat = $statement->fetchAll();

            return $resultat;
        }

        public static function getAllFavProductUser($user) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM product AS b INNER JOIN prd_detail as a ON (b.prd_id=a.prd_id) INNER JOIN favorite as c ON (b.prd_id=c.fav_prd_id) WHERE fav_users_id= ".$user."");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            $resultat = null;

            $resultat = $statement->fetchAll();

            return $resultat;
        }

        public static function addBagUsers($productId,$UserId,$quantity) {
            $connection = Connection::getConnection();
            
            $sql = "INSERT INTO bag (bag_prd_id, bag_users_id,bag_quantity)
             VALUES (?,?,?)";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(1, $productId, PDO::PARAM_STR);
            $stmt->bindParam(2, $UserId, PDO::PARAM_STR);
            $stmt->bindParam(3, $quantity, PDO::PARAM_STR);
            $stmt->execute();
        }

        public static function addFavUsers($productId,$UserId,$quantity) {
            $connection = Connection::getConnection();
            
            $sql = "INSERT INTO favorite (fav_prd_id, fav_users_id,fav_quantity)
             VALUES (?,?,?)";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(1, $productId, PDO::PARAM_STR);
            $stmt->bindParam(2, $UserId, PDO::PARAM_STR);
            $stmt->bindParam(3, $quantity, PDO::PARAM_STR);
            $stmt->execute();
        }

        public static function deleteBag($productId) {
            $connection = Connection::getConnection();
            
            $sql = " DELETE FROM `bag` WHERE `bag`.`bag_id` = ".$productId." ";
            $stmt = $connection->prepare($sql);
            $stmt->execute();
        }

        public static function deleteFav($productId) {
            $connection = Connection::getConnection();
            
            $sql = " DELETE FROM `favorite` WHERE `favorite`.`fav_id` = ".$productId." ";
            $stmt = $connection->prepare($sql);
            $stmt->execute();
        }
    }