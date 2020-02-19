

<?php

  session_start();


    //Get values from session and POST
    $value = $_POST["second"];
    $winning_door = $_SESSION["winning_door"];
    $n = $_SESSION["n"];

    if($value != $_SESSION["first_door"]){
        $second_value = $_SESSION["first_door"];
        $switch = "Yes";
    }
    else {
        $second_value = $second_door;
        $switch = "No";
    }


    $_SESSION["seconddoor_value"] = $value;
    $_SESSION["switch_value"] = $switch;




    if($winning_door == 1){
        $firstImage = "./images/prize.jpg";
        $secondImage = "./images/trash.jpeg";
        $thirdImage = "./images/trash.jpeg";
    }

    elseif($winning_door == 2){
        $firstImage = "./images/trash.jpeg";
        $secondImage = "./images/prize.jpg";
        $thirdImage = "./images/trash.jpeg";
    }
    else{
        $firstImage = "./images/trash.jpeg";
        $secondImage = "./images/trash.jpeg";
        $thirdImage = "./images/prize.jpg";
    }




    //result text

    if($winning_door == $value){
      $resultHeader = "Congrats" ." " .$_SESSION["name1"];
      $resultText = "You won the game";
    }

    else{
      $resultHeader = "Nice Try," ." " .$_SESSION["name1"];
      $resultText = "Play again and better luck next time";
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
  </head>

  <body>
    <br>
    <br>

    <div class="container">    


    <form action="database.php" method="POST">
        
      <div class="row">            

        <div class="col-lg curtain">

        <button type="submit" value="1"  class="bt"  >

          <img src="<?php echo $firstImage; ?>"  id="option1">
          <h2>Door 1</h2>
        </button>

        </div>

        <div class="col-lg curtain">
            
        <button type="submit" value="2"  class="bt" >
           <img src="<?php echo $secondImage; ?>"  id="option2">
           <h2>Door 1</h2>
        </button>

        </div>  

          <div class="col-lg curtain">
            
          <button type="submit" value="3"  class="bt"  >
             <img src="<?php echo $thirdImage; ?>"  id="option3">
             <h2>Door 3</h2>
          </button>

    </div>  

    </div>  
        

    <br> <br>

    <div class="jumbotron">
      <h2 class="display-4"> <?php echo $resultHeader; ?> </h2>
      <p class="lead"> <?php echo $resultText; ?></p>
      <hr class="my-4">
      <p class="lead">
        <button type="submit" class="btn btn-primary btn-lg" href="./index.html" role="button">Play Again</button>
      </p>
    </div>
        
    </form>
    </div>


  </body>

</html>