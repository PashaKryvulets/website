<?php

if (isset($_POST["submit"])) {
    //Grabbing the data
    $uid = $_POST["submit"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //instantiate signupcontr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    //running error handler and user signup
    $signup->signupUser();

    //going back to front page
    header("location: ../index.php?error=none");
}
