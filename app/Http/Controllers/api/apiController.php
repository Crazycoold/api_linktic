<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Traits\DataManagement;
use App\Http\Controllers\api\requestController;


class apiController extends requestController
{
	use DataManagement;

	public function __construct()
	{
		parent::__construct();
		//$this->middleware('client.credentials');
	}

	public function getData()
	{
		return $this->getQuery();
	}

	public function taskSave(Request $request)
	{
		return $this->task($request);
	}

	public function taskUpdate(Request $request)
	{
		return $this->updateTask($request);
	}

	public function taskGet(Request $request)
	{
		return $this->getTask($request);
	}

	public function fulterTask(Request $request)
	{
		return $this->getTask($request);
	}
}
