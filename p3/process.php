<?php
session_start();

if($_GET['p1']){
    $winner = null;
    $moves = array(Rock, Paper, Scissors);
    $moves = rand(0,2);
    $p1 = $_GET['p1'];
    $p2 = $choose[$moves];
}

if($p1 == $p2){
    echo 'Tie';
    } elseif($p1 == 'Rock' and $p2 == 'Scissors'){
    echo 'Win';
    } elseif($p1 == 'Rock' and $p2 == 'Paper'){
    echo 'Lose';
    }  elseif($p1 == 'Paper' and $p2 == 'Rock'){
    echo 'Win';
    } elseif($p1 == 'Paper' and $p2 == 'Scissors'){
    echo 'Lose';
    }  elseif($p1 == 'Scissors' and $p2 == 'Rock'){
    echo 'Lose';
    }  elseif($p1 == 'Scissors' and $p2 == 'Paper'){
    echo 'Win';
    }

$results = [
    'winner' => $winner,
    'moves' => $moves,
    'choice' => $choose,
];

$_SESSION['correct'] = $correct;
header('Location: index.php');