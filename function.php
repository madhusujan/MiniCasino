<?php
require 'poker.php';
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
?>
