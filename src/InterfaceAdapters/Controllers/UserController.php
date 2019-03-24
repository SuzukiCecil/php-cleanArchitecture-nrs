<?php

namespace Src\InterfaceAdapters\Controllers;

use Src\ApplicationBusinessRules\UseCases\IUserCreateUseCase;
use Src\ApplicationBusinessRules\InputData\UserCreateInputData;
use Src\ApplicationBusinessRules\UseCases\UserCreateInteractor;

class UserController
{
    /**
     * @var IUserCreateUseCase $userCreateUseCase
     */
    private $userCreateUseCase;

    public function __construct(IUserCreateUseCase $userCreateUseCase = null)
    {
        $this->userCreateUseCase = $userCreateUseCase?: new UserCreateInteractor();
    }

    public function createUser($username)
    {
        $inputData = new UserCreateInputData($username);
        $this->userCreateUseCase->handle($inputData);
    }
}
