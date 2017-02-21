<?php 

namespace App\Controller;

class StudentController extends BaseController
{
	public function index()
	{
		return $this->model->showAll();
	}
}



?>