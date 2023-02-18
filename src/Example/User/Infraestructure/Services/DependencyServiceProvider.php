<?php
namespace Src\Example\User\Infraestructure\Services;
use Illuminate\Support\ServiceProvider;

final class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->when(\Src\Example\User\Application\Find\UserFindAllUseCase::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infraestructure\Repositories\Eloquent\UserRepository::class);
        $this->app
            ->when(\Src\Example\User\Application\Find\UserFindByIdUseCase::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infraestructure\Repositories\Eloquent\UserRepository::class);
        $this->app
            ->when(\Src\Example\User\Application\Delete\UserDeleteByIdUseCase::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infraestructure\Repositories\Eloquent\UserRepository::class);
        $this->app
            ->when(\Src\Example\User\Application\Save\UserSaveUseCase::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infraestructure\Repositories\Eloquent\UserRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
