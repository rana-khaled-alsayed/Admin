<?php
    $user = "root";
    $server = "localhost";
    $dbname = "ai-nexus";
    $dbpass = "";

    try{
        $conn = mysqli_connect($server, $user, $dbpass, $dbname);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect.";
    }

?>