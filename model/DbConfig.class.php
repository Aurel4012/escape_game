<?php
class Database 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_db_name = 'hackaton';
    
    public $bdd;
    
    // get the database connection
        public function getConnection(){
      
            $this->bdd = null;
      
            try{
                $this->bdd = new PDO("mysql:host=" . $this->_host . ";dbname=" . $this->_db_name, $this->_username, $this->_password);
            }catch(PDOException $exception){
                echo "Connection erreur: " . $exception->getMessage();
            }
      
            return $this->bdd;
        }
    
}
?>