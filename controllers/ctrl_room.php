<?php
require_once ('Model/DbConfig.class.php');
require_once ('Model/User.class.php');
require_once ('Model/ObjectManager.class.php');
require_once ('Model/Inventaire.class.php');
echo 'hello controler';
/// instencie nouvelle objet avec en argument la connexion bdd et id de la tablette
            $database = new Database();
            $db = $database->getConnection();
            $produit = new ObjectManager($db,$id_tablette_connect,$id_user);
            $liste_detail_pdv = $produit->list_pdv();// recup detail liste
            $liste_pdv = $produit->getBoutonListRestauCommande($link);// recup detail liste restau

if((isset($_GET['action'])) and (isset($_GET['id']))){//permet la redirection ajax
$url_redirect = ' <script type="text/javascript">var redirect_link = "'.$_SERVER['PHP_SELF'].'?action='.$_GET['action'].'&id='.$_GET['id'].'"</script>';
    }else{
$url_redirect = ' <script type="text/javascript">var redirect_link = "'.$_SERVER['PHP_SELF'].'"</script>';
    }            
    require_once ('view/header.php');
    if(isset($_GET['id'])){
    $restau = new GestionCatalogue($db,$_GET['id'],$id_user);
    $liste_detail_pdv2 = $restau->list_pdv_all($_GET['id']);// recup detail liste choix
    $id_tablette_connect = $_GET['id'];
    require_once ('view/stock_pdv_all.php');
    
     }else{
     echo '<H4>Commandes Restaurants</H4>'.$liste_pdv;
     }

     
    

     require_once ('view/footer.php');
?>