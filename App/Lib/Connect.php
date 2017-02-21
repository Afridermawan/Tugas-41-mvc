<?php 	

namespace App\Lib;


class Connect extends \PDO
{
	private $db;

	public function __construct()
	{
		$this->db = parent::__construct('mysql:host=localhost;dbname=perpustakaan','root', 'apple');
		//set default fetch menjadi array
		$this->setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);

	}
}

?>