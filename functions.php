<?php 
    if (isset($_POST["fnct"]))
    {
        insertItem();
    }

    function insertItem()
    {
        echo "test";
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hackathon";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $sql = "INSERT INTO Inventaire (id_objet, id_partie) VALUES ('2', '1')";
 
            $conn->exec($sql);
            echo "New record created successfully";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        
        
        
    }
    
?>