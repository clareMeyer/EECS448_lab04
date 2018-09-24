<?php
  error_reporting(E_all);
  ini_set("display_errors", 1);

  $answer1 = $_POST["question1"];
  $answer2 = $_POST["question2"];
  $answer3 = $_POST["question3"];
  $answer4 = $_POST["question4"];
  $answer5 = $_POST["question5"];

  $count=0;
  $wrong=0;

  echo "Question 1 ";
  if($answer1 == "EECS448"){
    $count++;
  }
  else{
    $wrong++;
    echo "*";
  }
  echo "<br>";
  echo "Your answer: " . $answer1 . "<br>";
  echo "Correct answer: EECS448" . "<br>";
  echo "<br>";
  echo "<br>";


  echo "Question 2 ";
  if($answer2 == "3"){
    $count++;
  }
  else{
    $wrong++;
    echo "*";
  }
  echo "<br>";
  echo "Your answer: " . $answer2 . "<br>";
  echo "Correct answer: 3" . "<br>";
  echo "<br>";
  echo "<br>";

  echo "Question 3 ";
  if($answer3 == "Blue"){
    $count++;
  }
  else{
    $wrong++;
    echo "*";
  }
  echo "<br>";
  echo "Your answer: " . $answer3 . "<br>";
  echo "Correct answer: Blue" . "<br>";
  echo "<br>";
  echo "<br>";

  echo "Question 4 ";
  if($answer4 == "21"){
    $count++;
  }
  else{
    $wrong++;
    echo "*";
  }
  echo "<br>";
  echo "Your answer: " . $answer4 . "<br>";
  echo "Correct answer: 21" . "<br>";
  echo "<br>";
  echo "<br>";


  echo "Question 5 ";
  if($answer5 == "Sept. 26"){
    $count++;
  }
  else{
    $wrong++;
    echo "*";
  }
  echo "<br>";
  echo "Your answer: " . $answer5 . "<br>";
  echo "Correct answer: Sept. 26" . "<br>";
  echo "<br>";
  echo "<br>";



  echo "Total Correct: " . $count . "<br>";
  echo "Total Incorrect: " . $wrong . "<br>";
  echo "Score (percent): " . $count/5 . "%" . "<br>";
 ?>
