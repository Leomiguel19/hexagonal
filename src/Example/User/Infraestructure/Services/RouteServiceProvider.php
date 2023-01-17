<?php
namespace Src\Example\User\Infraestructure\Services;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\Example\User\Infraestructure\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapRoutes();
    }

    public function mapRoutes()
    {
        Route::prefix('api/users')
            ->namespace($this->namespace)
            ->group(base_path('src/Example/User/Infraestructure/Routes/Api.php'));
    }

}