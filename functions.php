<?php 



    if (isset($_POST["fnct"]))
    {
        if($_POST["fnct"]=="newGame")
        {
            newGame();
        }
        
        if($_POST["fnct"]=="inserItem" && isset($_POST["item"]))
        {
            insertItem();
        }
        
    }
    
    
    function newGame()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123ezaltar";
        $dbname = "hackathon";
        $item = $_POST["item"];
        
        
        try {
            error_log("debut try");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $sql = "INSERT INTO Partie (id_partie) VALUES (NULL)";
 
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
    
    
    
    function insertItem()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123ezaltar";
        $dbname = "hackathon";
        $item = $_POST["item"];
        
        getParameters();
        
        try {
            error_log("debut try");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $sql = "INSERT INTO Inventaire (id_partie, id_objet) VALUES ('2', '$item')";
 
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