<?php

class Inventaire {
 
    // database connection and table name
    private $_bdd;
    protected $id_object;
  // object properties
      // public $id_tablette_connect;
    protected $id_user;
   /**
    * Class Constructor
    * @param    $db   
    * @param    $id_tablette_connect (id du point de vente) 
    */
  public function __construct($db, $id_object,$id_user){
           $this->_bdd = $db;
           $this->id_user = $id_user;
           $this->id_object = $id_object;
  }

  /**
    * @param 
    * // tab object
    * @return 
    */
  public function test($tab_object){

   $pass = new Inventaire($this->_bdd,$this->id_object,$this->id_user);

      $req = $this->_bdd->prepare('') or die(print_r($this->_bdd->errorInfo())); 
       $req->execute();
    
      $inventory = $req->fetch(PDO::FETCH_ASSOC); 
       $req->closeCursor(); 
      
       // var_dump($mdp_record['pass']);
      
       return $inventory;
      }// fin de fonction

}
?>   