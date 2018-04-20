function newGame()
{
    	$.ajax({url: "functions.php",
			type:"post",
			data:{fnct: 'newGame'},
			success: function(output){
                            output = JSON.parse(output);
                            console.log("nouvelle partie créée, id: " + output);
                            
                            document.cookie = "id_partie=" + output; 
                             
                            location.href = "game.php";
			}
                    });
                    
        
}

function clickItem(item)
{
	switch (item)
	{
		case 1:
			console.log("Vous avez la hache");
			insertItem(1);
			break;
                case 2:
                        console.log("Vous regardez la deuxieme hache");
                        showMessage("Vous regardez la deuxieme hache")
                        break;
		default:
			console.log("noob");
	
	}
}

function insertItem(item)
{
    console.log(item);
	$.ajax({url: "functions.php",
			type:"post",
			data:{fnct: 'insertItem', item:item},
			success: function(output){
			console.log("la hache est enregistrée dans la base!");
			}
                    });
                    
}

function showMessage(message)
{
    alert(message);
                    
}