<?php 

//http://php.net/manual/en/mysqli.query.php 
//Procedural style 
$link = mysqli_connect("localhost", "TA17_Ruutli", "qwerty123", "TA17_Ruutli"); 

/* check connection */ 
if (mysqli_connect_errno()) { 
    printf("Connect failed: %s\n", mysqli_connect_error()); 
    exit(); 
} else { 
    echo 'Connection successfully'; 
} 

 

/* Create table doesn't return a resultset */ 
if (mysqli_query($link, "CREATE TABLE test_ta17_20180913 LIKE yl1_model") === TRUE) { 
    printf("Table test_ta17 successfully created.\n"); 
} 


$insert = "INSERT INTO test_ta17_20180913 (username, password, groups, added, status) 
    VALUES ('John', 'Doe', 99, '" . date('Y-m-d H:i:s') . "', 1); "; 

    echo $insert; 
if (mysqli_query($link, $insert) === TRUE) { 
    printf("Row created.\n"); 
} 