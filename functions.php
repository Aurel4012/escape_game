<?php 



    if (isset($_POST["fnct"]))
    {
        if($_POST["fnct"]=="newGame")
        {
            newGame();
        }
        
        error_log($_POST["fnct"]);
        error_log($_POST["item"]);
        
        if($_POST["fnct"]=="insertItem" && isset($_POST["item"]))
        {
        
            error_log("insertion");
            insertItem();
        }
        
        
        if($_POST["fnct"]=="checkItem" && isset($_POST["item"]))
        {
        
            error_log("checkItem");
            checkItem();
        }
        
    }
    
    
    function newGame()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hackathon";
        
        
        try {
            error_log("debut try");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $sql = "INSERT INTO partie (id_partie) VALUES (NULL)";
 
            $conn->exec($sql);
            
            error_log($conn->lastInsertId());
 
            echo json_encode(($conn->lastInsertId()));
            
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
        
        
        try {
            error_log("debut try");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $sql = "INSERT INTO Inventaire (id_partie, id_objet) VALUES ($_COOKIE[id_partie], $item)";
 
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
    
    
    function checkItem()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123ezaltar";
        $dbname = "hackathon";
        $item = $_POST["item"];
        
        
        try {
            error_log("debut try");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            //$sql = "SELECT * FROM Inventaire WHERE id_partie =" . $_COOKIE[id_partie] . " AND id_objet =" . $item;
 
            error_log("test items: " . $_COOKIE[id_partie]);
            error_log($item);
            
            $nRows = $conn->query("SELECT EXISTS(SELECT * FROM Inventaire WHERE id_partie =" . $_COOKIE[id_partie] . " AND id_objet =" . $item . ")");
            
            error_log(serialize($nRows));

            
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
