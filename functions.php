<?php 
    if (isset($_POST["fnct"]))
    {
        insertItem();
    }

    function insertItem()
    {
        error_log("debut");
        
        $servername = "localhost";
        $username = "root";
        $password = "123ezaltar";
        $dbname = "hackathon";
        
        try {
            error_log("debut try");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $sql = "INSERT INTO Inventaire (id_partie, id_objet) VALUES ('2', '1')";
 
            $conn->exec($sql);
            echo "New record created successfully";
            
            error_log("fin try");
        }
        catch(PDOException $e)
        {
            error_log("debut catch");
            error_log($e->getMessage);
                        
        }
        error_log("fin fonction");
        
        
    }
    
?>