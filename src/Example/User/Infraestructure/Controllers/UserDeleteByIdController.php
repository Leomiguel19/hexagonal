<?php
namespace Src\Example\User\Infraestructure\Controllers;

use Src\Example\User\Application\Delete\UserDeleteByIdUseCase;
use Symfony\Component\HttpFoundation\Request;

final class UserDeleteByIdController
{
    private $deleteByIdUseCase;

    public function __construct(UserDeleteByIdUseCase $deleteByIdUseCase)
    {
        $this->deleteByIdUseCase = $deleteByIdUseCase;
    }

    public function __invoke(Request $request, int $id): array
    {
        return $this->deleteByIdUseCase->__invoke($id);
    }
}