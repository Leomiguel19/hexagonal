<?php

namespace Src\Example\User\Application\Find;

use Src\Example\Shared\Domain\Exceptions\UserException;

final class UserFindAllUseCase
{
    public function __construct()
    {
        //algo
    }

    public function __invoke(): array
    {
        throw new UserException("Esta es una excepcion personalizada", 400);
        return [
            "saludo" => "Hola mundo desde el caso de uso",
        ];
    }
}