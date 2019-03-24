<?php

namespace Src\InterfaceAdapters\Presenters;

use Src\InterfaceAdapters\OutputData\UserCreateOutputData;

interface IUserCreatePresenter
{
    public function complete(UserCreateOutputData $outputData);
    public function failed(UserCreateOutputData $outputData);
}