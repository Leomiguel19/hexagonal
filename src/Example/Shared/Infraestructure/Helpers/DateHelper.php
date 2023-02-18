<?php

namespace Src\Example\Shared\Infraestructure\Helpers;

use Carbon\Carbon;

trait DateHelper
{
    public function getNow()
    {
        return Carbon::now()->toTimeString();
    }
}