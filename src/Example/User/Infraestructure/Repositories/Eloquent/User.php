<?php
namespace Src\Example\User\Infraestructure\Repositories\Eloquent;
use Illuminate\Database\Eloquent\Model;

final class User extends Model
{
    protected $table = 'users';

    protected $hidden = ['password'];
}