<?php

namespace App\Http\Controllers;

use App\Http\Requests\DingoRequest;
use Dingo\Api\Routing\Helpers;

class RequestController extends Controller
{
    use Helpers;

    public function test(DingoRequest $request)
    {
        return $this->response->array([]);
    }
}
