function newGame()
{
    $.ajax({url: "functions.php",
        type: "post",
        data: {fnct: 'newGame'},
        success: function (output) {
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
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        case 6:
            break;
        case 7:
            break;
        case 8:
            insertItem(8);
            break;
        case 9:
            insertItem(9);
            break;
        case 31:
            if (checkItem(31) == "cle et code")
            {
                showMessage("A l'aide de la clé et du code vous avez déverouillé le coffre-fort!");
            } else if (checkItem(31) == "cle")
            {
                showMessage("Vous avez déverouillé la serrure avec la clé, plus qu'a trouver le code!");
            } else if (checkItem(31) == "code")
            {
                showMessage("Vous avez entrer le digicode du code, plus qu'a trouver la clé!");
            } else
            {
                showMessage("Le coffre est protégé par une serrure et un digicode...");
            }
            ;
            break;
        case 32:
            break;
        case 33:
            if (checkItem(33) == "torche")
            {
                showMessage("Il fait trop sombre dans la pièce observer en détails ce tableau...");
            } else
            {
                showMessage("Grâce à la lampe torche vous remarquer que le tableau dissimule une coffre-fort!");
            }
            ;
            break;
        case 34:
            insertItem(34);
            break;
        case 35:
            if (checkItem(35) == "phone")
            {
                showMessage("Après avoir composé le numéro de la tortue vous entendez une voix vous dire un code: 874652!");
            } else
            {
                showMessage("Vous ne savez pas quel numéro composer avec ce téléphone...");
            }
            ;
            break;
        case 36:
            insertItem(36);
            break;
        case 37:
            insertItem(37);
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
            if (JSON.parse(output))
            {
                return output;
            }
        }
    });
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
    } else if (id_menu == "hall") {
        $("#hall").removeClass("hidden");
        $("#garage").addClass("hidden");
        $("#salon").addClass("hidden");
        $("#cuisine").addClass("hidden");
        $("#bureau").addClass("hidden");
    }

}
