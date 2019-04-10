<?php 
    include 'functions.php';
    session_start();
    $db = getDB();

//login
//get id uname pwd
if(isset($_GET["uname"]) && isset($_GET["pwd"])){
    $user = $_GET["uname"];
    $pass = $_GET["pwd"];
    //db check user and pass
    $query = "SELECT * FROM account WHERE Username='".$user."' AND Pass='".md5($pass)."';";    
//    echo $query;
    $result = runQuery($db, $query);
    $num_rows = mysqli_num_rows($result);
    
    if($num_rows==1){ //if good, session user=user, tokens = tokens
//        $pdo = newPDO(DBHOST, DBUSER, DBPASS);
//        $sql = "SELECT Username FROM account WHERE Username=? AND Pass=?";
//        $smt = $pdo->prepare($sql);
//        $smt->execute(array($user,md5($pass)));
//        if($smt->rowCount()){
//            
//        }
        
        $roww = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $values = array_values($roww);
        
        $_SESSION["loginID"] = $values[1];
        $_SESSION["tokens"] = $values[3];
        
        header("Location: home.php"); 
        return;
        
    }else{ //if bad, go to new page that says Login failed, wrong user/pass/etc header
        header("Location: account-error.php?code=0");  
        return;
    }
}else{
    header("Location: account-error.php"); 
    return;     
} 

?>
