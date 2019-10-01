<?php
// var_dump($p1);
// var_dump($p2);

$moves = ['rock', 'paper', 'scissors'];
$p1 =$moves[rand(0,2)];
$p2 =$moves[rand(0,2)];

$shoot = $moves[rand(0, 2)];

if($p1 == $p2) {
    var_dump('Tie');
    $winner = "Tie";
} elseif($p1 =='rock' and $p2 =='scissors'){
    var_dump('P1 wins');
    $winner = "P1";
} elseif($p1 =='rock' and $p2 == 'paper') {
    var_dump('P2 wins');
    $winner = "P2";
}  elseif($p1 =='paper' and $p2 == 'rock') {
    var_dump('P1 wins');
    $winner = "P1";
}  elseif($p1 =='paper' and $p2 == 'scissors') {
    var_dump('P2 wins');
    $winner = "P2";
}  elseif($p1 =='scissors' and $p2 == 'paper') {
    var_dump('P1 wins');
    $winner = "P2";
}  elseif($p1 =='scissors' and $p2 == 'rock') {
    var_dump('P2 wins');
    $winner = "P2";
}  