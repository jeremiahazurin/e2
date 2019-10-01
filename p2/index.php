<!-- <?php require 'index-controller.php'; ?> -->
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Rock, Paper, Scissors Game</title>
	<meta charset='utf-8'>
</head>
<body>
	<h1>Rock, Paper, Scissors</h1>
	<ul>
			<li>Both Players 1 (P1) and 2 (P2) choose either rock, paper, or scissors at random. </li>
			<li>If both players choose the same item, then there is a tie.</li>
			<li> In the event that there isn't a tie, however, then rock beats paper, paper beats rock, and rock beats scissors. 
		</ul>
	<h2>Mechanics</h2>

		<h2>Results</h2>
		<ul>
			<li> Player 1 chooses <?php echo $p1; ?> </li>
			<li> Player 2 chooses <?php echo $p2; ?> </li>
			<li> The winner is <?php echo $winner; ?></li>
		</ul>
</body>
</html>