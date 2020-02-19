
<?php

session_start();

    $value = $_POST["selected_door"];
    $winning_door = $_SESSION["winning_door"];

    do{
        $n = mt_rand(1,3);
    } while($n == $winning_door || $n == $value);




    $_SESSION["n"] = $n;
    $_SESSION["first_door"] = $value;


    if($n ==1){
    	$firstImage = "./images/trash.jpeg";
    	$disabledFirst = 0;
    }

    else{
    		$firstImage = "./images/9.jpeg";
    		$disabledFirst = 1;
    }

    if($n == 2){
    		$secondImage = "./images/trash.jpeg";
    		$disabledSecond = 0;
    }
	 	else{
			$secondImage = "./images/9.jpeg";
				$disabledSecond = 1;
		}

		if($n == 3){
    		$thirdImage = "./images/trash.jpeg";
      	$disabledThird = 0;

    }
	 else{
			$thirdImage = "./images/9.jpeg";
				$disabledThird = 1;
		}



?>

<!doctype html>
<html lang="en">
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="./monty-hall.css">
    <title></title>

  </head>

  <body>

  	<div class="container">

  		<br> <br>
  		
  		  <h3> <?php echo "You Selected Door " . $value; ?>  </h3>
 				<hr>
  		   	<br> <br>
				<form action= './Final.php' method="POST">

			  <div class="row">			   

            <div class="col-lg curtain">

		          <button type="submit" value="1" name="second"  class="bt" <?php if($disabledFirst == '0'){ ?> disabled <?php } ?> >
		        
								<img src="<?php echo $firstImage; ?>"  id="option1">
								<h2>Door 1</h2>
		          </button>

				    </div>

				    <div class="col-lg curtain">
				     	
		          <button type="submit" value="2" name="second"  class="bt" <?php if($disabledSecond == '0'){ ?> disabled <?php } ?>>
								 <img src="<?php echo $secondImage; ?>"  id="option2">
								 <h2>Door 2</h2>
		          </button>

				    </div>	

				      <div class="col-lg curtain">
				     	
		          <button type="submit" value="3" name="second"  class="bt" <?php if($disabledThird == 'true'){ ?> disabled <?php } ?> >
								 <img src="<?php echo $thirdImage; ?>"  id="option2">
								 <h2>Door 3</h2>
							</button>
							
				    </div>	

				    </div>  
        
					</form>
					<br>
					<br>
					<hr>
					
			<div class="jumbotron">
      <p class="lead">
			<h3> Thinking about switching the door?  </h3>
      </p>
    </div>
			  </div>

				



  </body>

</html>