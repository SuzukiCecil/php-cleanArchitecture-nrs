<?php

namespace Src\ApplicationBusinessRules\InputData;

class UserCreateInputData
{
    private $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}