<?php

namespace Src\InterfaceAdapters\Presenters;

use Src\InterfaceAdapters\OutputData\UserCreateOutputData;

class UserCreatePresenter implements IUserCreatePresenter
{
    public function complete(UserCreateOutputData $outputData)
    {
        $userId = $outputData->getUserId();
        $username = $outputData->getUsername();
        $createdDate = $outputData->getCreatedAt();
        $createdDateText = $createdDate->format("Y/m/d H:i:s");
        $model = new UserCreateViewModel($userId, $username, $createdDateText);
        echo("id:" . $model->getUserId() . " name:" . $username . " created:" . $model->getCreatedAt() . "\n");
    }

    public function failed(UserCreateOutputData $outputData)
    {
        $userId = $outputData->getUserId();
        $username = $outputData->getUsername();
        $createdDate = $outputData->getCreatedAt();
        $createdDateText = $createdDate->format("Y/m/d H:i:s");
        $model = new UserCreateViewModel($userId, $username, $createdDateText);
        echo("id:" . $model->getUserId() . " name:" . $username . " is already exist\n");
    }
}