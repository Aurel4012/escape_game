<?php
require_once ('Model/DbConfig.class.php');
require_once ('Model/Inventaire.class.php'); 
require_once ('Model/ObjectManager.class.php');
require_once ('Model/User.class.php');
if (!isset($_SESSION['player'])){
 $controller = 'controllers/ctrl_user.php';
}
if(isset($_GET['action'])) {
	
    if($_GET['action']== 'room'){
       $controller = 'controllers/ctrl_room.php';
    }elseif ($_GET['action']== 'inventaire') {
        $controller = 'controllers/ctrl_inventaire.php';
    }else{
    // echo 'autre cas';
    }
   require_once($controller);
}
?>