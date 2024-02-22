<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;

interface connectionAdapter
{
    public function getAllUsers(): ?array;
}

class EloquentAdapter implements ConnectionAdapter
{
    public function getAllUsers(): ?array
    {
        $users = User::all();
        return [
            "users" => $users
        ];
    }
}

class storeProcedureAdapter implements ConnectionAdapter
{
    public function getAllUsers(): ?array
    {
        $users = DB::execute('CALL lsp_call_all_users(');
        return [
            "users" => $users
        ];
    }
}

class IndexController
{
    private $adapter;

    public function __construct(EloquentAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function __invoke(): ?array 
    {
        return $this->adapter->getAllUsers();
    }
}