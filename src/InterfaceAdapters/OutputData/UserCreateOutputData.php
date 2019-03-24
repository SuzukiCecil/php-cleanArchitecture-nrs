<?php

namespace Src\InterfaceAdapters\OutputData;

class UserCreateOutputData
{
    /**
     * @var string $userId
     */
    protected $userId;
    /**
     * @var string $username
     */
    protected $username;
    /**
     * @var \DateTime $createdAt
     */
    protected $createdAt;

    /**
     * UserCreateOutputData constructor.
     * @param string $userId
     * @param string $username
     * @param \DateTime $createdAt
     */
    public function __construct($userId, $username, \DateTime $createdAt)
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
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}