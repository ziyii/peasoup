<?php
include 'include/config.php';
/*
Defines functions to connect to the Database, retrieve the result and 
return them. You need several functions for different questions
*/

function getDB()
{
	// connect to the DB and returns a reference to the DB
    $db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    
    //error check
    if (!$db) {
        print "Error - Could not connect to MySQL";
        exit;
    }
    $error = mysqli_connect_error();
    if ($error !=null) {
        $output = "<p>Unable to connect to database</p>" . $error;
        exit($output);
    }
    return $db;
}

function runQuery($db, $query) {

	// takes a reference to the DB and a query and returns the results of running the query on the database
//    $db = getDB();
    
    $result = mysqli_query($db, $query);
    if (!$result) {
        print "Error - the query could not be executed";
        $error = mysqli_error();
        print "<p>" . $error . "</p>";
        exit;
    }
    return $result;
}


?>
