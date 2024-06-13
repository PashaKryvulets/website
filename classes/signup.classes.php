<?php

//Taking signing up data from user
class Signup extends Dbh {

    protected function checkUser($uid, $email) {

        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');
        
    }
}
