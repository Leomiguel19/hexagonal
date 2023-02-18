<?php

namespace Src\Example\User\Domain\Contracts;

use Src\Example\User\Domain\User;
use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Domain\ValueObject\UserSaveRequest;

interface UserRepositoryContract
{
    public function findAll(): array;

    public function findById(UserId $id): ?array;

    public function deleteById(UserId $id): bool;

    public function save(UserSaveRequest $request): ?int;
}