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
			succes: function(output){
			console.log("la hache est enregistrée dans la base!");
			}
	);
}
}
	console.log("coucou");
	alert("ceihfozef");
	
	function show_menu(id_menu) {
		console.log("text");
	    if (id_menu == "salon") {
	        $("#salon").removeClass("hidden");
	        $("#garage").addClass("hidden");
	        $("#cuisine").addClass("hidden");
	        $("#bureau").addClass("hidden");
	        $("#hall").addClass("hidden");
	    } else if (id_menu == "cuisine") {
	        $("#cuisine").removeClass("hidden");
	        $("#garage").addClass("hidden");
	        $("#salon").addClass("hidden");
	        $("#bureau").addClass("hidden");
	        $("#hall").addClass("hidden");
	    } else if (id_menu == "garage") {
	        $("#garage").removeClass("hidden");
	        $("#salon").addClass("hidden");
	        $("#cuisine").addClass("hidden");
	        $("#bureau").addClass("hidden");
	        $("#hall").addClass("hidden");
	    } else if (id_menu == "bureau") {
	        $("#bureau").removeClass("hidden");
	        $("#garage").addClass("hidden");
	        $("#salon").addClass("hidden");
	        $("#cuisine").addClass("hidden");
	        $("#hall").addClass("hidden");
	    }else if (id_menu == "hall") {
	        $("#hall").removeClass("hidden");
	        $("#garage").addClass("hidden");
	        $("#salon").addClass("hidden");
	        $("#cuisine").addClass("hidden");
	        $("#bureau").addClass("hidden");
	    }
	        
	}