<?php
    require("./config.php");
    if(empty($_SESSION['user'])) 
    {
       header("Location: ../index.php");
       die("Redirecting to ../index.php"); 
   }
?>

<!doctype html>
<html>

<body>
    <h2>Hello this is a secret text! <?php htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></h2>
    <li><a href="./logout.php">Log Out</a></li>
</body>
</html>
