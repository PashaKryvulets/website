<?php

if (isset($_POST["submit"])) 
{

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //instantiate logincontr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    //running error handler and user login
    $login->loginUser();

    //going back to front page
    header("location: ../index.php?error=none");
}
