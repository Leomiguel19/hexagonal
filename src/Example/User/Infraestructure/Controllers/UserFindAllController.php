<?php

namespace Src\Example\User\Infraestructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UserFindAllController
{
    private $findAllUseCase;

    public function __construct(UserFindAllUseCase $findAllUseCase)
    {
        $this->findAllUseCase = $findAllUseCase;
    }

    public function __invoke()
    {
        return $this->findAllUseCase->__invoke();
    }
}