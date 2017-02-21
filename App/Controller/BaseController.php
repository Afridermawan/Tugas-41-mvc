<?php

namespace App\Controller;

abstract class BaseController
{
	protected $url;
	protected $action;
	protected $model;
	protected $namespace = "App\\Model\\"; //for autoload models
	public $message;

	public function __construct($url, $action)
	{
		$this->url = $url['page'];
		$this->action = $action;

		if (isset($this->url)) {
			$model = $this->namespace. ucfirst($url['page']);
			$this->model = new $model;
		} 
	}

	public function executeAction()
	{
		if (!empty($this->action)) {
			return $this->{$this->action}();
		} else {
			$this->message = "Action Not Found";
			echo "$this->message";
		}
	}

	public function executeView()
	{
		// $viewName = $this->action;
		if (!isset($this->url)) {
			$this->url = 'Home';
			$viewName = 'index';
		} else {
			$viewName = $this->action;
		}

		$viewFile = "App/View/".ucfirst($this->url)."/$viewName.php";
		if(file_exists($viewFile)) {
			require_once($viewFile);
		} else {
			$this->message = "File Note Found";
			echo "$this->message";
		}
	}
}

?>
