<?php
namespace Src\Example\User\Infraestructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Domain\ValueObject\UserSaveRequest;
use Src\Example\User\Infraestructure\Repositories\Eloquent\User;
final class UserRepository implements UserRepositoryContract
{
    private $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }

    public function findById(UserId $id): ?array
    {
        $response = $this->model->find($id->value());
        return ($response) ? $this->model->find($id->value())->toArray() : null;
    }

    public function deleteById(UserId $id): bool
    {
        return $this->model->where('id', $id->value())->delete();
    }

    public function save(UserSaveRequest $request): ?int
    {
        // dd($request->handler());
        $response = $this->model->create($request->handler());
        return ($response) ? $response->id : null;

    }
}