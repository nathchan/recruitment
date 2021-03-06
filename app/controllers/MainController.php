<?php

class MainController extends BaseController 
{
	public function index()
	{
		$industries = Industry::get();
		$functions = Func::get();
		$locations = Location::get();
		$salaries = Salary::get();
		
		return View::make('main')->with([
				'industries' 	=> $industries,
				'functions'		=> $functions,
				'locations'		=> $locations,
				'salaries'		=> $salaries
		]);
	}
	
	public function openJobSeeker()
	{
		return View::make('candidate');
	}
	
	public function getCVCreate()
	{
		return View::make('candidate');
	}

}
