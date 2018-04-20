<?php
require_once ('Model/DbConfig.class.php');
require_once ('Model/User.class.php');
require_once ('Model/ObjectManager.class.php');
require_once ('Model/Inventaire.class.php');
/// instencie nouvelle objet avec en argument la connexion bdd et id de la tablette
echo 'creation player';
            $database = new Database();
            $db = $database->getConnection();
            $user = new User($db);
            $user_id = $user->create_user();// recup id_user


?>