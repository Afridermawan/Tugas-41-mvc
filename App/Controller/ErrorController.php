<?php 
namespace App\Controller;
class ErrorController extends BaseController
{
	public function index()
	{
		$this->message = "Halaman Tidak Ditemukan";
		return $this->message;
	}
}