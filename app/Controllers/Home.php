<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];

		return view('user/home', $data);
	}

	public function soon()
	{
		$data = [
			'title' => 'Coming Soon'
		];

		return view('soon', $data);
	}
}
