<?php
include 'functions.php';
session_start();
$db = getDB();

//signup
//get user pass
if(isset($_GET["uname"]) && isset($_GET["pwd"]) && isset($_GET["cpwd"])){
    $user = $_GET["uname"];
    $pass = $_GET["pwd"];
    $cpass = $_GET["cpwd"];
    //check if pass == cpass
    if($pass != $cpass){
        //cpwd does not match
        header("Location: account-error.php?code=1"); 
        return;
    }
    //db check if exists
    echo $user;
    $query = "SELECT * FROM account WHERE Username='".$user."';";
    $result = runQuery($db, $query);
    $num_rows = mysqli_num_rows($result);
    if($num_rows==0){ //if good, insert into db -- session user=user, tokens = tokens
//        $pdo = new PDO(DBHOST, DBUSER, DBPASS);
//        $sql = "INSERT INTO account(Username, Pass) VALUES (?,?)";
//        $smt = $pdo->prepare($sql);
//        $smt->execute(array($user,md5($pass)));
        $query = "INSERT INTO account(Username, Pass) VALUES ('".$user."','".md5($pass)."');";
        $result = runQuery($db,$query);
        
        header("Location: login.php"); 
        return;
    }else{ //if bad, go to new page that says Signup failed, existing user/pass/etc header
        //exists
        header("Location: account-error.php?code=2");  
        return;
    }
}else{
    header("Location: account-error.php");  
    return;    
} 

?>
