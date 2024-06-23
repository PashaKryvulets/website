<?php

//Taking signing up data from user
class LoginContr extends Login
{

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }

    //Checking for correctness of the entered data
    private function emptyInput()
    {

        $result = false;

        if (
            !empty($this->uid) ||
            !empty($this->pwd)
        ) {
            $result = true;
        }
        return $result;
    }
}
