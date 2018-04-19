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

function insertItem(1)
{
	$.ajax({url: "functions.php",
			type:"post",
			data:"insertItem"
			}
		succes: function(output){
			console.log("la hache est enregistrée dans la base!");
		}
	);
}