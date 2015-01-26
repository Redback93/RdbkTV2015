<?php

class HomeController extends BaseController {
	public function index()
	{
		return View::make('index');
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function project($name)
	{
		$projects = Config::get('projects.projects');
		if(!array_key_exists($name, $projects))
			App::abort(404);

		$vars = array();
		$selectedProject = $projects[$name];
		$vars["project"] = $selectedProject;

		//Array diff removes dot elements
		$vars["imageDir"] = '/img/projects/'.$name;
		$vars["images"] = array_diff(scandir(getcwd().$vars["imageDir"]), array(".",".."));

		return View::make('project', $vars);
	}
}
