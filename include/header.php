<div class="account">
    <?php
    if(isset($_SESSION["loginID"]) && isset($_SESSION["tokens"])){
        echo "Welcome <b>".$_SESSION["loginID"]."</b>! You have <b>".$_SESSION["tokens"]."</b> tokens.";
        echo "<a class='account' href='logout-check.php'>Logout</a>";  
        
    }else{
        echo "<a class='account' href='login.php'>Login</a> 
              <a class='account' href='signup.php'>Sign Up</a>";  
    }
    ?>
    
</div>
<a style="width:900px;display:block;margin:auto;margin-top:25px;margin-bottom:25px;" href="home.php"><img style="width:900px;display:block;margin:auto;border-radius:10px;" src="images/peasoup.png"></a>
<ul class="menu">
    <li><a class="mid" href="home.php"><b>Home</b></a></li>
    <li><a class="mid" href="games.php"><b>Games</b></a></li>
    <li><a class="mid" href="howtoplay.php"><b>How to Play</b></a></li>
    <li><a class="mid" href="contactus.php"><b>Contact Us</b></a></li>
</ul>