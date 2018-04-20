function newGame()
{
    	$.ajax({url: "functions.php",
			type:"post",
			data:{fnct: 'newGame'},
			success: function(output){
				console.log(output);
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
            if(checkItem(4) == "cle et code")
            {
                showMessage("A l'aide de la clé et du code vous avez déverouillé le coffre-fort!");
            }
            else if(checkItem(4) == "cle")
            {
                showMessage("Vous avez déverouillé la serrure avec la clé, plus qu'a trouver le code!");
            }
            else if(checkItem(4) == "code")
            {
                showMessage("Vous avez entrer le digicode du code, plus qu'a trouver la clé!");
            }
            else
            {
                showMessage("Le coffre est protégé par une serrure et un digicode...");
            };
            break;
        case 2:
            showMessage("");
            break;
        case 3:
            showMessage("");
            break;
        case 4:
            if(checkItem(4) == "torche")
            {
                showMessage("Il fait trop sombre dans la pièce observer en détails ce tableau...");
            }
            else
            {
                showMessage("Grâce à la lampe torche vous remarquer que le tableau dissimule une coffre-fort!");
            };
            break;
        case 5:
            insertItem(5);
            break;
        case 6:
            if(checkItem(6) == "phone")
            {
                showMessage("Après avoir composé le numéro de la tortue vous entendez une voix vous dire un code: 874652!");
            }
            else
            {
                showMessage("Vous ne savez pas quel numéro composer avec ce téléphone...");
            };
            break;
        case 7:
            insertItem(7);
            break;
        case 8:
            insertItem(8);
            break;
        default:
            console.log("");

    }
}

function insertItem(item)
{
    console.log(item);
    $.ajax({url: "functions.php",
        type: "post",
        data: {fnct: 'insertItem', item: item},
        success: function (output) {
            //console.log("la hache est enregistrée dans la base!");
        }
    });
}

function checkItem(item)
{
    console.log(item);
    $.ajax({url: "functions.php",
        type: "post",
        data: {fnct: 'checkItem', item: item},
        success: function (output) {
            if(JSON.parse(output))
            {
                return output;
            }
        }
    });
}

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
    } else if (id_menu == "hall") {
        $("#hall").removeClass("hidden");
        $("#garage").addClass("hidden");
        $("#salon").addClass("hidden");
        $("#cuisine").addClass("hidden");
        $("#bureau").addClass("hidden");
    }

}

function showMessage(message)
{
    alert(message);
                    
}

	
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
