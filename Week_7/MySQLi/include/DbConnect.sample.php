<?php

// Fill in db details here.
$db = '';
$user = '';
$pass = '';
  
$mysqli = new mysqli('localhost', $user, $pass, $db);
    
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>