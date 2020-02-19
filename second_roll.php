<?php
  
  session_start();

  $past_rolled = $_SESSION['first_roll'];

  $first_dice = mt_rand(1,6);

  $second_dice = mt_rand(1,6);


  switch($first_dice){
    case 1:
        $dice1 = 'images/1.png';
        break;
    case 2:
        $dice1 = 'images/2.png';
        break;
    case 3:
        $dice1 = 'images/3.png';
        break;

    case 4:
        $dice1 = 'images/4.png';
        break;

    case 5:
        $dice1 = 'images/5.png';
        break;

    case 6:
        $dice1 = 'images/6.png';
        break;

}

switch($second_dice){
    case 1:
        $dice2 = 'images/1.png';
        break;
    case 2:
        $dice2 = 'images/2.png';
        break;
    case 3:
        $dice2 = 'images/3.png';
        break;

    case 4:
        $dice2 = 'images/4.png';
        break;

    case 5:
        $dice2 = 'images/5.png';
        break;

    case 6:
        $dice2 = 'images/6.png';
        break;
}

?>


<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body> 
    <img class="center" src="./images/logo.png" alt="Madhu's Casino ">
    <ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
      <a class="nav-link active " href="dice.html">Home</a>
    </li>
    <li class="nav-item  dropdown ">
      <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Games</a>
      <div class="dropdown-menu">
      <a class="dropdown-item active " href="poker.html">Poker</a>
        <a class="dropdown-item active " href="first_roll.php">Dice & Craps</a>
        <a class="dropdown-item active " href="monty-hall.php">Let's Make a Deal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active " href="#">Contact</a>
    </li>
  </ul>
  <div class="main-div container bg">
	<center> 
  <h1 class="display-4">Welcome to Casino Craps </h1>
    <?php

    $sum= $first_dice + $second_dice;  

    $first='<h2 > <center> <div class="d-inline p-2 bg-dark text-white"> First Roll : '.$past_rolled.'</div> </center> </h2> 
    </br>
    <h2 > <center> <div class="d-inline p-2 bg-dark text-white">Current Roll: '.$sum.'</div></center> </h2> 
    <img class="src1" src="'.$dice1.'"> <img class="src" src="'.$dice2.'">';
    
    if($past_rolled == $sum){

      global $first ;

      $second=<<<'EOD'
  		<div class="jumbotron jumbotron-fluid bg-light border border-dark">
			<h1 class="display-3 text-success">Congrats, You won !!</h1>
     			<button onclick="window.location.href='first_roll.php'" class="btn btn-success btn-lg">Play Again</button>
					</div>
EOD;
     
      $final = $first .  $second; 
      echo "$final";

    }

    else if($sum == 7){

      global $first ;
       $second=<<<'EOD'
		<div class="jumbotron jumbotron-fluid bg-light border border-dark">
  <h1 class="display-3 text-danger">Oops !! You lost the game </h1>
     <button onclick="window.location.href='first_roll.php'" class="btn btn-danger btn-lg button">Play Again</button>
	</div>
EOD;

 		$final = $first .  $second; 
    echo "$final";
    
  }


  else{

    global $first ;
    
    $second=<<<'EOD'
  <div class="jumbotron jumbotron-fluid bg-light border border-dark">
  <h1 class="display-3">Let's try to win this Game !! </h1>
      <form action="./second_roll.php" method='POST'>
    <input type="submit" value="Roll Again" class="btn btn-dark btn-lg button">
    </form>
</div>
EOD;

 		$final = $first .  $second; 
    echo "$final";
    

  }
  

?>

    </center>

    </div>

  
 </div>


</body>

</html>




