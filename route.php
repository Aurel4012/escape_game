<?php
error_reporting(E_ALL);
    ini_set('display_errors', true);

if(isset($_GET['action'])) {
    if($_GET['action']== 'room'){
       $controller = 'controllers/ctrl_room.php';
    }elseif ($_GET['action']== 'inventaire') {
        $controller = 'controllers/ctrl_inventaire.php';
    }

     require_once($controller);
}
?>