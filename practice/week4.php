<?php
// $moves = ['rock', 'paper', 'scissors'];
// $guesses = [];
// $randomNumber = rand(0, 2);
// var_dump($moves[$randomNumber]);

// $coinValues = [
//     'pennies' => .01,
//     'nickels' => .05,
//     'dimes' => .10,
//     'quarters' => .25,
//     'halfdollar' => .5,
// ];

// $coinCounts = [
//     'pennies' => 300,
//     'nickels' => 5,
//     'dimes' => 0,
//     'quarters' => 125,
//     'halfdollar' => 50,
// ];

// $coins = [
//     'pennies' => [.01, 300],
//     'nickels' => [.05, 5],
//     'dimes' => [0, .1],
//     'quarters' => [.25, 125],
//     'halfdollar' => [.5, 50],
// ];

// $total = 0;
// foreach ($coins as $coin => $info) {
//     $total = $total + ($info[1] * $info[0]);
// }

// $total = 0;
// foreach ($coinCounts as $coin => $count) {
//     $total = $total + ($count * $coinValues[$coin]);
// }

// var_dump($total);

// $moves = ['rock', 'paper', 'scissors'];
// $player1move =$moves[rand(0,2)];
// $player2move =$moves[rand(0,2)];

// var_dump($player1move);
// var_dump($player2move);
 
// if($player1move == $player2move) {
//     var_dump('Tie');
// } elseif($player1move =='rock' and $player2move =='paper'){
//     var_dump('Player 2 wins');
// } elseif($player1move =='rock' and $player2move == 'scissors') {
//     var_dump('Player 1 wins');
// }  

$moves = ['rock', 'paper', 'scissors'];
$p1 =$moves[rand(0,2)];
$p2 =$moves[rand(0,2)];

var_dump($p1);
var_dump($p2);
 
if($p1 == $p2) {
    var_dump('Tie');
} elseif($p1 =='rock' and $p2 =='scissors'){
    var_dump('P1 wins');
} elseif($p1 =='rock' and $p2 == 'paper') {
    var_dump('P2 wins');
}  elseif($p1 =='paper' and $p2 == 'rock') {
    var_dump('P1 wins');
}  elseif($p1 =='paper' and $p2 == 'scissors') {
    var_dump('P2 wins');
}  elseif($p1 =='scissors' and $p2 == 'paper') {
    var_dump('P1 wins');
}  elseif($p1 =='scissors' and $p2 == 'rock') {
    var_dump('P2 wins');
}  