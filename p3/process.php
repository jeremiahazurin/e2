<?php
session_start();

if($_GET['choice']){
    $winner = null;
    $moves = array(Rock, Paper, Scissors);
    $moves = rand(0,2);
    $p1 = $_GET['p1'];
    $p2 = $choose[$moves];
}

if($p1 == $p2){
    echo 'Tie';
    $winner = 'There was a tie!'
    } elseif($p1 == 'Rock' and $p2 == 'Scissors'){
    echo 'Win';
    $winner = 'You won!'
    } elseif($p1 == 'Rock' and $p2 == 'Paper'){
    echo 'Lose';
    $winner = 'You lost'
    }  elseif($p1 == 'Paper' and $p2 == 'Rock'){
    echo 'Win';
    $winner = 'You won!'
    } elseif($p1 == 'Paper' and $p2 == 'Scissors'){
    echo 'Lose';
    $winner = 'You lost'
    }  elseif($p1 == 'Scissors' and $p2 == 'Rock'){
    echo 'Lose';
    $winner = 'You lost'
    }  elseif($p1 == 'Scissors' and $p2 == 'Paper'){
    echo 'Win';
    $winner = 'You won!'}


$results = [
    'winner' => $winner,
    'moves' => $moves,
    'choice' => $choose,
];

$_SESSION['correct'] = $correct;
header('Location: index.php');