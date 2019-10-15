<?php require 'process-controller.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <title>My Web Site</title>
    <meta charset='utf-8'>

    <!-- page config goes here in the head -->

</head>
<body>
    <?php if($correct) { ?>
    You got it!
    <?php } else { ?>
        Sorry, you are incorrect
    <?php } ?>
</body>
</html>  