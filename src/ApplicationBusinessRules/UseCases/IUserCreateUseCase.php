<?php

namespace Src\ApplicationBusinessRules\UseCases;
use Src\ApplicationBusinessRules\InputData\UserCreateInputData;

interface IUserCreateUseCase
{
    /**
     * @param UserCreateInputData $inputData
     * @return mixed|void
     * @throws \Exception
     */
    public function handle(UserCreateInputData $inputData);
}