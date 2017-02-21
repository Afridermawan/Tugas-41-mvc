<?php 

namespace App\Model;

use App\Model\BaseModel;

class Author extends BaseModel
{
	public function add($name)
	{
		$query = "INSERT INTO author (name) VALUES (:name)";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':name', $name);
		$stmt->execute();

		$this->message = "Succesfully add Author";

		return $stmt;
	}

	public function showAll()
	{
		$query = "SELECT * FROM author";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	public function edit($id, $name)
	{
		$query = "UPDATE author SET name=:name WHERE id=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':name', $name);
		$stmt->execute();

		$stmt->message = "Author Succesfully edited";

		return $stmt;
	}

	public function showById($id)
	{
		$query = "SELECT * FROM author WHERE id =:id";
		$stmt = $this->db->prepare($stmt);
		$stmt->bindParam(':id', $id);
		$stmt->execut();

		return $this->Fetch($this->db::FETCH_ASSOC);
	}

	public function delete($id)
	{
		$query = "UPDATE author SET deleted = 1 WHERE id=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		$stmt->message = "The Author has been removed";

		return $stmt;
	}
}

?>