<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home Page | Endah Sarah Wanty'
		];
		return view('page/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About Page | Endah Sarah Wanty'
		];
		return view('page/about', $data);
	}
	public function skill()
	{
		$data = [
			'title' => 'Skill Page | Endah Sarah Wanty'
		];
		return view('page/skill', $data);
	}

	//--------------------------------------------------------------------

}
