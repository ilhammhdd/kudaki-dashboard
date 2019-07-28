<?php

namespace App;


class User
{
    public $accountType;
    public $email;
    public $phoneNumber;
    public $role;
    public $uuid;

    public function __construct($accountType, $email, $phoneNumber, $role, $uuid)
    {
        $this->accountType = $accountType;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->role = $role;
        $this->uuid = $uuid;
    }
}
