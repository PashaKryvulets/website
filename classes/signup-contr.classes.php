<?php

//Taking signing up data from user
class SignupContr {

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    //Checking for correctness of the entered data
    private function emptyInput() {

        $result = false;

        if(!empty($this->uid) ||
           !empty($this->pwd) ||
           !empty($this->pwdrepeat) ||
           !empty($this->email)) {
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

    private function invalidEmail() {
        $result = false;

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = true;
        }

        return $result;
    }

    private function invalidMatch() {
        
        $result = false;
        
        if($this->pwd !== $this->pwdrepeat)
        {
            $result = true;
        }

        return $result;
    }
}
