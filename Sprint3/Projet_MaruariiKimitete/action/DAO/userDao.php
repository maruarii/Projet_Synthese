<?php
    require_once("action/DAO/Connection.php");

    class UserDAO {

        public static function authenticate($email, $password) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM users WHERE users_email = ?");
            $statement->bindParam(1, $email);
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            $user = null;

            // $tableauDeLignes = $statement->fetchAll();
            if ($row = $statement->fetch()) {
                if (password_verify($password, $row["password"])) {
                    $user = $row; 
                }
            }

            return $user;
        }

        public static function addClient($prenom, $nom, $email,$pwd,$visibility) {
            $connection = Connection::getConnection();
            $options = ['cost' => 12];
            $hashPwd = password_hash($pwd, PASSWORD_DEFAULT, $options);

            $sql = "INSERT INTO users(users_first_name, users_last_name,users_email,password,visibility)
             VALUES (?,?,?,?,?)";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(1, $prenom, PDO::PARAM_STR);
            $stmt->bindParam(2, $nom, PDO::PARAM_STR);
            $stmt->bindParam(3, $email, PDO::PARAM_STR);
            $stmt->bindParam(4, $hashPwd, PDO::PARAM_STR);
            $stmt->bindParam(5, $visibility, PDO::PARAM_STR);
            $stmt->execute();
        }
    }