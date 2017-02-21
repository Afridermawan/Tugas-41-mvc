<?php 

namespace App\Controller;

class AuthorController extends BaseController
{
	public function index()
	{
		return $this->model->showAll();
	}
}

?>