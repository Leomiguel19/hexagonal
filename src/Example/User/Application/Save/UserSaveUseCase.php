<?php

namespace Src\Example\User\Application\Save;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Domain\ValueObject\UserSaveRequest;

final class UserSaveUseCase
{
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(array $request, string $date)
    {
        
        $response = $this->repository->save(new UserSaveRequest($request, $date));

        if(!$response){
            $this->exception();
        }

        return [
            "message" => "OK",
            "id" => $response
        ];
        
    }

    private function exception()
    {
        throw new UserException("Usuario no guardado", 500);
    }
}