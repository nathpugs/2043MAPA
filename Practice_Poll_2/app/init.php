<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:host=localhost;dbname=poll2', 'root', 'root');