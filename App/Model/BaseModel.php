<?php 
namespace App\Model;

use App\Lib\Connect;

class BaseModel
{
	protected $db;

	public function __construct()
	{
		$this->db = new Connect();
	
	}
}

?>