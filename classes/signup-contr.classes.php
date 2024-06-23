<?php

//Taking signing up data from user
class SignupContr extends Signup
{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if ($this->invalidUid() == false) {
            //echo "Invalid username!";
            header("location: ../index.php?error=username");
            exit();
        }

        if ($this->invalidEmail() == false) {
            //echo "Invalid email!";
            header("location: ../index.php?error=email");
            exit();
        }

        if ($this->pwdMatch() == false) {
            //echo "Passwords don't match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            //echo "Username or email taken!";
            header("location: ../index.php?error=useremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    //Checking for correctness of the entered data
    private function emptyInput()
    {

        $result = false;

        if (
            !empty($this->uid) ||
            !empty($this->pwd) ||
            !empty($this->pwdrepeat) ||
            !empty($this->email)
        ) {
            $result = true;
        }
        return $result;
    }

    private function invalidUid()
    {
        $result = false;

        if (preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail()
    {
        $result = false;

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }

        return $result;
    }

    private function pwdMatch()
    {

        $result = false;
        if ($this->pwd === $this->pwdrepeat) {
            $result = true;
        }

        return $result;
    }

    private function uidTakenCheck()
    {

        $result = false;

        if ($this->checkUser($this->uid, $this->email)) {
            $result = true;
        }

        return $result;
    }
}
