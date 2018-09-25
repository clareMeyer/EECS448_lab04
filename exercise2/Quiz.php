<?php
/*
Quiz.php
Author: Clare Meyer
Lab: 04; Exercise: 02
grades the Quiz.html questions and prints results
 */
  error_reporting(E_all);
  ini_set("display_errors", 1);

  /*pulling answers to questions from Quiz.html*/
  $answer1 = $_POST["question1"];
  $answer2 = $_POST["question2"];
  $answer3 = $_POST["question3"];
  $answer4 = $_POST["question4"];
  $answer5 = $_POST["question5"];

  /*count is the number of correct answers, wrong is the number of incorrect answers*/
  $count=0;
  $wrong=0;

  /*grading the questions, takes in the answer and checks right*/
  /*increments either count or wrong*/
  echo "Question 1: Which class is this project for?";
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


  echo "Question 2: How many letters does the word dog have?";
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

  echo "Question 3: What color is the sky on a sunny day?";
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

  echo "Question 4: How old do you have to be to drink alcohol in the US?";
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


  echo "Question 5: When does Clare turn 21?";
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


  /*displays total correct, incorrect, and percentage*/
  echo "Total Correct: " . $count . "<br>";
  echo "Total Incorrect: " . $wrong . "<br>";
  echo "Score (percent): " . ($count/5)*100 . "%" . "<br>";
 ?>
