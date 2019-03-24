<?php

namespace Src\ApplicationBusinessRules\UseCases;
use mysql_xdevapi\Exception;
use Src\ApplicationBusinessRules\InputData\UserCreateInputData;
use Src\EnterpriseBusinessRules\Entities\User;
use Src\InterfaceAdapters\Gateways\IUserRepository;
use Src\InterfaceAdapters\Gateways\UserRepository;
use Src\InterfaceAdapters\OutputData\UserCreateOutputData;
use Src\InterfaceAdapters\Presenters\IUserCreatePresenter;
use Src\InterfaceAdapters\Presenters\UserCreatePresenter;

class UserCreateInteractor implements IUserCreateUseCase
{
    /**
     * @var IUserRepository $userRepository
     */
    private $userRepository;
    /**
     * @var IUserCreatePresenter $presenter
     */
    private $presenter;

    /**
     * UserCreateInteractor constructor.
     * @param IUserRepository|null $userRepository
     * @param IUserCreatePresenter|null $presenter
     */
    public function __construct(IUserRepository $userRepository = null, IUserCreatePresenter $presenter = null)
    {
        $this->userRepository = $userRepository?: new UserRepository();
        $this->presenter = $presenter?: new UserCreatePresenter();
    }

    /**
     * @inheritdoc
     */
    public function handle(UserCreateInputData $inputData)
    {
        $duplicateUser = $this->userRepository->findByUserName($inputData->getUsername());
        if (isset($duplicateUser)) {
            $outputData = new UserCreateOutputData($duplicateUser->getUserId(), $duplicateUser->getUsername(), new \DateTime());
            $this->presenter->failed($outputData);
            return;
        }
        $user = new User(null, $inputData->getUsername());
        $userId = $this->userRepository->save($user);
        $user->setUserId($userId);

        $outputData = new UserCreateOutputData($user->getUserId(), $user->getUsername(), new \DateTime());
        $this->presenter->complete($outputData);
    }
}
