<?php

namespace Src\Example\User\Infraestructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;

final class UserRepository implements UserRepositoryContract
{
    public function findAll(): array
    {
        return ["Hola Mundo"];
    }
}