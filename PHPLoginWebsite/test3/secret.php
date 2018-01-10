<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: secret.php");
        die("Redirecting to secret.php"); 
    }
?>
<a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGOUT</a>

heofhiefohe