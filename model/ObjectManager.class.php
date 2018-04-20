<?php
class Objectmanager {
 
    // database connection and table name
    private $_bdd;
    protected $id_object;
  // object properties
   
    protected $id_user;
   /**
    * Class Constructor
    * @param    $db   
    * @param    $id_user (id du joueur) 
    */
   public function __construct($db, $id_object,$id_user){
           $this->_bdd = $db;
           $this->id_user = $id_user;
           $this->id_object = $id_object;
   }

      /**
        * @param 
        * // id de la piece
        * @return 
        */


  
  public function list_object($id_room){
    $list_item = new Objectmanager($this->_bdd,$this->id_object,$this->id_user);

    $req = $this->_bdd->prepare('SELECT restau_catalogue_pd.*, restau_cate_pd.*, restau_stock_pdv.stock_restau_'.$this->id_object.'') or die(print_r($this->_bdd->errorInfo())); /// recup des seuils stock affecté par tablette.

          $req->execute();
        
          $list_pd_pdv = $req->fetchAll(PDO::FETCH_OBJ); 
           $req->closeCursor(); 
    }// end_list_object
}
?>   