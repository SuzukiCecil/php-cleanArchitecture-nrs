<?php

namespace Src\InterfaceAdapters\Presenters;

class UserCreateViewModel
{
    /**
     * @var string $userId
     */
    private $userId;
    /**
     * @var string $username
     */
    protected $username;
    /**
     * @var string $createdAt
     */
    private $createdAt;

    /**
     * UserCreateViewModel constructor.
     * @param string $userId
     * @param string $createdAt
     */
    public function __construct($userId, $username, $createdAt)
    {
        $this->userId = $userId;
        $this->username = $username;
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}