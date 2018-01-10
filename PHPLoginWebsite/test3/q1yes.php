<?php

// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
    
    // Connect to MySQL
    $mysqli = new mysqli( 'localhost', 'pugsleyn', '!OWVmNjQzMmVhNzA2Zjk3ODMxMDA1NWY3', 'DB1pugsleyn' );
    
    // Check the connection
    if ( $mysqli->connect_error) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    // Insert the data
//    $sql = "UPDATE question SET Yes='1 WHERE Qid=5";
    $sql = "UPDATE question SET yes = yes + 1 WHERE Qid = 1";
    $insert = $mysqli->query($sql);    
    
//    // Insert the data
//    $sql = "INSERT INTO question ( question, yes ) VALUES ( '{$mysqli->real_escape_string($_POST['question'])}', '{$mysqli->real_escape_string($_POST['yes'])}' )";
//    $insert = $mysqli->query($sql);
    
//    // Insert the data
//    $sql = "INSERT INTO question ( question, yes ) VALUES (Question, Yes)";
//    $insert = $mysqli->query($sql);
    
    
    
    // Print response from MySQL
    if ( $insert ) {
        echo "Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    // Close the connection
    $mysqli->close();
}

header("location: javascript://history.go(-1)");
?>


