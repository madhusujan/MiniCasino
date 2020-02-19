<?php

//create session variables
session_start();
$winDoor = mt_rand(1,3);
$_SESSION["winning_door"] = $winDoor;

//Get the name
$name = $_POST["name"];
$_SESSION["name1"] = $name;


?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="monty-hall.css">
<div class="doors">
    <h2>Let's Make a Deal</h2>
    <div class="left"></div>
    <div class="right"></div>
    <div class="container">
  <br> <br>
				<form action= './switch.php' method="POST">
  		   	<br> <br>

			  <div class="row">
			  	
				    <div class="col-lg curtain">

		          <button type="submit" value="1" name="selected_door">
                <img src="./images/9.jpeg"  id="option1">
                <h2>Door 1</h2>
		          </button>

				    </div>

				    <div class="col-lg curtain" >
				     	
		          <button type="submit" value="2" name="selected_door" >
                <img src="./images/9.jpeg"  id="option2">
                <h2>Door 2</h2>
		          </button>
						</div>
					
				    <div class="col-lg curtain" >
					     	
		          <button type="submit" value="3" name="selected_door" >
                <img src="./images/9.jpeg"  id="option3">
                <h2>Door 3</h2>
		          </button>
							
				    </div>

			    </form>
			  </div>
			</div>

  </div>
  
  </html>