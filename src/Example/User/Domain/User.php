<?php

namespace Src\Example\User\Domain;

use Src\Example\User\Domain\ValueObject\{UserEmail,UserFullName,UserPassword,UserTimeStamp,UserUserName};

class User
{
    private $userUserName; 
    private $userFullName; 
    private $userEmail; 
    private $userPassword; 
    private $userTimeStamp;

    public function __construct(
        UserUserName $userUserName,
        UserFullName $userFullName,
        UserEmail $userEmail,
        UserPassword $userPassword,
        UserTimeStamp $userTimeStamp
    )
    {
        $this->userUserName = $userUserName;
        $this->userFullName = $userFullName;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userTimeStamp = $userTimeStamp;
    }

    public function userUserName(): UserUserName
    {
        return $this->userUserName;
    }

    public function userFullName(): UserFullName
    {
        return $this->userFullName;
    }

    public function userEmail(): UserEmail
    {
        return $this->userEmail;
    }

    public function userPassword(): UserPassword
    {
        return $this->userPassword;
    }

    public function userTimeStamp(): UserTimeStamp
    {
        return $this->userTimeStamp;
    }
}