<?php
session_start();

if($_GET["choice"]){
    $winner = null;
    $moves = array("rock", "paper", "scissors");
    $p1 = $_GET["choice"];
    $p2 = $moves[rand(0,2)];
}

if($p1 == $p2){
    echo ("Tie");
    $winner = ("Tie!");
    } elseif($p1 == "rock" and $p2 == "scissors"){
    echo ("Win");
    $winner = "You won!";
    } elseif($p1 == "rock" and $p2 == "paper"){
    echo ("Lose");
    $winner = "You lost";
    }  elseif($p1 == "paper" and $p2 == "rock"){
    echo ("Win");
    $winner = "You won!";
    } elseif($p1 == "paper" and $p2 == "scissors"){
    echo ("Lose");
    $winner = "You lost";
    }  elseif($p1 == "scissors" and $p2 == "rock"){
    echo ("Lose");
    $winner = "You lost";
    }  elseif($p1 == "scissors" and $p2 == "paper"){
    echo ("Win");
    $winner = ("You won!");}


$results = [
    "winner" => $winner,
    "moves" => $moves,
    "choice" => $choice,
];

$_SESSION["correct"] = $winner;
header("Location: index.php");
