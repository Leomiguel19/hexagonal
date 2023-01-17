<?php

namespace Src\Example\User\Application\Find;

final class UserFindAllUseCase
{
    public function __construct()
    {
        //algo
    }

    public function __invoke(): array
    {
        return [
            "saludo" => "Hola mundo desde el caso de uso",
        ];
    }
}