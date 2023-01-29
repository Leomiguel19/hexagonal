<?php

namespace Src\Example\User\Infraestructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;
use Src\Example\User\Application\Find\UserFindByIdUseCase;
use Symfony\Component\HttpFoundation\Request;

final class UserFindByIdController
{
    private $findByIdUseCase;

    public function __construct(UserFindByIdUseCase $findByIdUseCase)
    {
        $this->findByIdUseCase = $findByIdUseCase;
    }

    public function __invoke(Request $request, int $id): array
    {
        return $this->findByIdUseCase->__invoke($id);
    }
}