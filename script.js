function newGame()
{
    	$.ajax({url: "functions.php",
			type:"post",
			data:{fnct: 'newGame'},
			success: function(output){
			console.log("nouvelle partie créée");
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
		default:
			console.log("noob");
	
	}
}

function insertItem(item)
{
	$.ajax({url: "functions.php",
			type:"post",
			data:{fnct: 'insertItem', item:item},
			success: function(output){
			console.log("la hache est enregistrée dans la base!");
			}
                    });
                    
}