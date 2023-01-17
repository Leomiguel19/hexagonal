<?php

namespace Src\Example\User\Infraestructure\Controllers;

final class UserFindAllController
{
    public function __invoke()
    {
        return [
            "Saludo" => "Hola Mundo",
        ];
    }
}