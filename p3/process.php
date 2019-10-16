<?php
session_start();

if($_GET["choice"]){
    $winner = null;
    $moves = array("rock", "paper", "scissors");
    $p1 = $_GET["choice"];
    $p2 = $moves[rand(0,2)];
}

if($p1 == $p2){
    var_dump('Tie');
    $winner = "There was a tie!";
    } elseif($p1 == "rock" and $p2 == "scissors"){
    var_dump('P1 wins');
    $winner = "The winner is P1";
    } elseif($p1 == "rock" and $p2 == "paper"){
    var_dump('P2 wins');
    $winner = "The winner is P2";
    }  elseif($p1 == "paper" and $p2 == "rock"){
    var_dump('P1 wins');
    $winner = "The winner is P1";
    } elseif($p1 == "paper" and $p2 == "scissors"){
    var_dump('P2 wins');
    $winner = "The winner is P2";
    }  elseif($p1 == "scissors" and $p2 == "rock"){
    var_dump('P2 wins');
    $winner = "The winner is P2";
    }  elseif($p1 == "scissors" and $p2 == "paper"){
    var_dump('P1 wins');
    $winner = "The winner is P1";}


    $results = [
        "winner" => $winner,
        "p1" => $p1,
        "p2" => $p2,
    ];
    
    $_SESSION["results"] = $results;
    header("Location: index.php");
