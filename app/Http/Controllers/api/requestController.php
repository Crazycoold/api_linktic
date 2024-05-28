<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class requestController extends Controller
{
    use ApiResponser;

    public function __construct()
	{
		$this->middleware('auth:api');
	}
}
