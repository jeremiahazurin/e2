<!DOCTYPE html>
<html lang='en'>

  <head>

    <title>Rock, Paper, Scissors 2</title>
    <meta charset='utf-8'>

  </head>

  <body>

    <form method='GET' action='process.php'>
      <h1>Rock, Paper, Scissors</h1>

      <h2>Instructions</h2>
      <ul>
        <li>Choose either rock, paper, or scissors and then click "Go"</li>
        <li>We will select one of the three, too.</li>
      </ul>

      <h2>Play</h2>

      <p>Choose your item: </p>
      <label for='Rock'>Rock</label>
      <input type='radio' name='choice' id='Rock'>

      <label for='Paper'>Paper</label>
      <input type='radio' name='choice' id='Paper'>

      <label for='Scissors'>Scissors</label>
      <input type='radio' name='choice' id='Scissors'>

      <button type='submit'>Go</button>
    </form>
  </body>

</html>
