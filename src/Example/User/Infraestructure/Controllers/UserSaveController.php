<?php 

namespace Src\Example\User\Infraestructure\Controllers;

use Illuminate\Http\Request;
use Src\Example\Shared\Infraestructure\Helpers\DateHelper;
use Src\Example\User\Application\Save\UserSaveUseCase;

final class UserSaveController
{
    use DateHelper;

    private $saveUseCase;

    public function __construct(UserSaveUseCase $saveUseCase)
    {
        $this->saveUseCase = $saveUseCase;
    }

    public function __invoke(Request $request)
    {
        return $this->saveUseCase->__invoke($request->all(), $this->getNow());
    }
}