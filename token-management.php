<?php
//include 'functions.php';
//session_start();
//$db = getDB();

//function tokenUpdate($amount) {
    $update = $_POST['update'];
    $tokenUpdate = $_POST['tokenUpdate'];


    if ($update == "success"){
        // some action goes here under php
        $tokens = $_SESSION['tokens'];
        $tokens = $tokens + $tokenUpdate;
        $_SESSION['tokens'] = $tokens;
        
        echo json_encode(array("abc"=>'5'));
    }
//}


?>
