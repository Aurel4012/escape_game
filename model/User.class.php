<?php
class User {
 
    // database connection and table name
    private $_bdd;
 
   
   
   /**
    * Class Constructor
    * @param    $db   
    * @param    $id_user (id du joueur) 
    */
   public function __construct($db){
           $this->_bdd = $db;
           
   }

      /**
        * @param 
        * // 
        * @return 
        */


  
  public function get_user(){
    $list_item = new User($this->_bdd);

    $req = $this->_bdd->prepare('') or die(print_r($this->_bdd->errorInfo())); /// recup des seuils stock affecté par tablette.

          $req->execute();
        
          $list_pd_pdv = $req->fetchAll(PDO::FETCH_OBJ); 
           $req->closeCursor(); 
    }// end_list_object

  /**
    * @param 
    * // null
    * @return id_user
    */ 
  public function create_user(){
    $list_item = new User($this->_bdd);

    $req = $this->_bdd->prepare('INSERT INTO partie VALUES (NULL)') or die(print_r($this->_bdd->errorInfo())); /// recup des seuils stock affecté par tablette.

          $req->execute();
        
          $user = $req->fetchAll(PDO::FETCH_OBJ); 
           $req->closeCursor(); 
          return $this->_bdd->lastInsertId();
    }// end_create_user
}
?>   