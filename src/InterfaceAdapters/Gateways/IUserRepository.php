<?php

namespace Src\InterfaceAdapters\Gateways;

use Src\EnterpriseBusinessRules\Entities\User;

interface IUserRepository
{

    /**
     * @param string $username
     * @return User|null
     */
    public function findByUserName($username);

    /**
     * @param User $user
     */
    public function save(User $user);
}