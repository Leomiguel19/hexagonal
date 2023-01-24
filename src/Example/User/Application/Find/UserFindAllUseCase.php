<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Exceptions\UserException;

final class UserFindAllUseCase
{
    public function __construct()
    {
        //algo
    }

    public function __invoke(): array
    {
        throw new UserException("Usuario no encontrado", 404);
        return [
            "saludo" => "Hola mundo desde el caso de uso",
        ];
    }
}