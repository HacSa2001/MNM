<?php

class User
{
    private $usreName
    private $userEmail
    private $userID
    private $status
    
    public function_construct ($newUser,$email)
    {
        this->$userName=$newUser;
        this->$userEmail=$email;
        this->$status=1;
        this->$userID=GetNextUserID();
    }
    
    public function_destruct ()
    {
        this->$userName=Null;
        this->$userEmail=Null;
        this->$status=1;
        this->$userID-1;
    }
    
    public function GetUserName()
    {
        return this->$userName;
    }

    public function GetUserEmail()
    {
        return this->$userEmail;
    }
    
    public function GetStatus()
    {
        return this->$status;
    }
    
    public function GetUserStatus($input)
    {
        if($input>1 || $input<0)
        {
            return false;
        }
        return this->status=$input;
        return true;
    }
}

?>
