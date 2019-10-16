<?php require 'index-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>

  <head>

    <title>Rock, Paper, Scissors 2</title>
    <meta charset='utf-8'>

  </head>

  <body>

    <h1>Rock, Paper, Scissors</h1>

    <h2>Instructions</h2>

    <ul>
      <li>Choose either rock, paper, or scissors and then click "Go"</li>
      <li>We will select one of the three, too.</li>
    </ul>

    <h2>Play</h2>
    <form method='GET' action='process.php'>

      <input type='radio' value='rock' id='rock' name='choice'>
      <label for='rock'> Rock </label> <br />

      <input type='radio' value='paper' id='paper' name='choice'>
      <label for='paper'> Paper </label> <br />

      <input type='radio' value='scissors' id='scissors' name='choice'>
      <label for='scissors'> Scissors </label> <br />

      <button type='submit'>Go</button>

    </form>

    <?php if ($showResults) { ?>
    P1 chose: <?php echo $results['moves']; ?>
    P2 chose: <?php echo $results['choice']; ?>
    }

    <?php if ($results['winner']) { ?>
    You won!
    <?php } else {?>
    You lost!
    <?php } ?>
    <?php } ?>

</html>
