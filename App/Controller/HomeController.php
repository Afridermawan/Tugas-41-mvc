<?php 

namespace App\Controller;

class HomeController extends BaseController
{
	public function index()
	{
		$this->message = '<div class="container-fluid">
							<h1> Welcome to the library Foundation! </h1>
						  </div>';
		return $this->message;
	}
}

?>