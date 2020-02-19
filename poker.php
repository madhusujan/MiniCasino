<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
background-image: url("https://www.winrivercasino.com/wp-content/uploads/2017/05/cardchipfgS-e1504737315894.png");
background-repeat: no-repeat;
background-size: cover;
font-family: "Comic Sans MS",  sans-serif,;
backface-visibility: .5;
font-size: 35px;
}
div{
  text-align: center;
  margin-top: 110px;
  border: 3px solid black ;
}
</style>
<?php

// driver code
function find_output(){
  $num = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
  $suits = array('spade','heart','club','diamond');
  $count_royal_flush = 0;
  $count_straight_flush = 0;
  $count_straight = 0;

  for ($i=0; $i < 10000; $i++) {
    $decks = get_five_cards($num, $suits);
    $count_royal_flush += royal_flush($decks);
    $count_straight_flush += straight_flush($decks);
    $count_straight += straight($decks);
  }
  echo "<div>";
  print_r("Simulating Poker Game 10000 times we get ");
  echo "<br>";
  echo "<br>";
  echo "<br>";
  Print_r("Number of Royal Flush: ".$count_royal_flush);
  echo "<br>";
  echo "<br>";
  print_r("Number of Straight Flush: ".$count_straight_flush);
  echo "<br>";
  echo "<br>";
  print_r("Number of Straight: ".$count_straight);
  echo"</div>";
  }


// for royal flush
function royal_flush($arr){
  $a = array();
  array_push($a, 1,10,11, 12, 13);
  $combination = $arr[0][1];

  $pok = false;
  for($i=0; $i<count($arr); $i++){
    if($arr[$i][1] == $combination){
      $pok = true;
    } else{
      $pok = false;
    }
  }

  if($pok == ""){
    return 0;
  } else{
    $res = array();
    for($i=0; $i<count($arr); $i++){
      array_push($res, $arr[$i][0]);
    }

    sort($res);
    if($res == $a){
      return 1;
    } else{
      return 0;
    }
  }
}

// get five random cards
function get_five_cards($arr1, $arr2) {
    $res = array();
    for ($i=0; $i < 5; $i++) {
      $x1= rand(0, 12);
      $x2 = rand(0,3);
      $y = array();
      array_push($y,$arr1[$x1], $arr2[$x2]);
      array_push($res, $y);
    }
    return $res;
  }

// check for increment
function increment($arr){
  $first = $arr[0];
  $in_seq = false;
  $i = 0;

  while($i<count($arr)-1){
    if($arr[$i+1]-$arr[$i] == 1){
      $in_seq = true;
      $i += 1;
    } else{
      $in_seq = false;
      break;
    }
  }

  return $in_seq;
}

// straight flush
function straight_flush($arr){
  $combination = $arr[0][1];

  //find suits
  $pok = false;
  for($i=0; $i<count($arr); $i++){
    if($arr[$i][1] == $combination){
      $pok = true;
    } else{
      $pok = false;
    }
  }

  if($pok == ""){
    return 0;
  } else{
    $res = array();
    for($i=0; $i<count($arr); $i++){
      array_push($res, $arr[$i][0]);
    }
    sort($res);
    $straight = increment($res);
    if($straight == ""){
      return 0;
    } else{
      return 1;
    }
  }
}
//find if it is straight
function straight($arr){
  $res = array();
  for($i=0; $i<count($arr); $i++){
    array_push($res, $arr[$i][0]);
  }
  sort($res);
  $straight = increment($res);
  if($straight == ""){
    return 0;
  } else{
    return 1;
  }
}

find_output();

 ?>
 </html>
