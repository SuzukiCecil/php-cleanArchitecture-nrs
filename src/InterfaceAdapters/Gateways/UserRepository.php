<?php

namespace Src\InterfaceAdapters\Gateways;

use Src\EnterpriseBusinessRules\Entities\User;

class UserRepository implements IUserRepository
{
    /**
     * @var User[] $users
     */
    private static $users = array();

    /**
     * @param string $username
     * @return User|null
     */
    public function findByUserName($username)
    {
        foreach (self::$users as $user) {
            if ($user->getUsername() === $username) {
                return $user;
            }
        }
        return null;
    }

    /**
     * @param User $user
     */
    public function save(User $user)
    {
        self::$users[] = $user;
        return count(self::$users);
    }

}