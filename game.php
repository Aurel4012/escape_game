<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>Escape game de la MORT</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
        <link rel="stylesheet" href="style.css" type="text/css">
        

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="script.js"></script>

    </head>
    
    
	<body>
<!--        <p><?php echo "Value is: " . $_COOKIE[id_partie]; ?></p>
        <img alt="imageTestObjet" src="images/axe.png" onclick="clickItem(1)">
        <img alt="imageTestObjet" src="images/axe.png" onclick="clickItem(2)">-->


		<div class="">
            <div class="row">
                <div class="col-12">
                <div id="menu" class="">
                        <div id="onglets" class="size_navigation dessus_menu row justify-content-around" style="width: 50%; margin-left: 25%;"> 
                            <button type="submit" class="col-2" onclick="show_menu('salon')" style="padding: 0%;"> <p class="dessus_nom_pièce">Salon</p> <img src="images/item_salon/salon_full.jpg" style="width: 100%;"></button>
                            <button type="submit" class="col-2" onclick="show_menu('cuisine')" style="padding: 0%;" > <p class="dessus_nom_pièce">Cuisine</p> <img src="images/item_cuisine/cuisine_full.jpg" style="width: 100%;"> </button>
                            <button type="submit" class="col-2" onclick="show_menu('bureau')"  style="padding: 0%;"> <p class="dessus_nom_pièce">Bureau</p> <img src="images/item_bureau/bureau_full.jpg" style="width: 100%;"> </button>
                            <button type="submit" class="col-2" onclick="show_menu('garage')" style="padding: 0%;" > <p class="dessus_nom_pièce">Garage</p> <img src="images/item_garage/garage_full.jpg" style="width: 100%;"> </button>
                            <button type="submit" class="col-2" onclick="show_menu('hall')" style="padding: 0%;" > <p class="dessus_hall">Hall</p> <img src="images/item_hall/space-3197639.jpg" style="width: 100%;">  </button>            
                        </div>
                      <div id="salon" class=""><img src="images/item_salon/salon_full.jpg"  >
                        </div>
                        <div id="cuisine" class="hidden"> <img src="images/item_cuisine/cuisine_full.jpg">
                        </div>
                        <div id="bureau" class="hidden">                     
                            <img src="images/item_bureau/bureau_full.jpg"/>
                            <img src="images/item_bureau/cofre.png" onclick="clickItem(1)"/>
                            <img src="images/item_bureau/desk.png" onclick="clickItem(2)"/>
                            <img src="images/item_bureau/elevator.png" onclick="clickItem(3)"/>
                            <img src="images/item_bureau/joconde.png" onclick="clickItem(4)"/>
                            <img src="images/item_bureau/key.png" onclick="clickItem(5)"/>
                            <img src="images/item_bureau/phone.png" onclick="clickItem(6)"/>
                            <img src="images/item_bureau/torche.png" onclick="clickItem(7)"/>
                            <img src="images/item_bureau/turtle.png" onclick="clickItem(8)"/>                        
                        </div>
                        <div id="garage" class="hidden"> <img src="images/item_garage/garage_full.jpg">
                        </div>
                        <div id="hall" class="hidden"> <img src="images/item_hall/space-3197639.jpg">
                        </div>
                    

                    </div>
                </div>
        	</div>
		</div>
    </body>

</html>
