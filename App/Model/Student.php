<?php 

 namespace App\Model;
 
 use App\Model\BaseModel;

 class Student extends BaseModel
 {
 	public function add($name, $gender, $phone_number, $address, $photo, $deleted)
 	{
 		$query = "INSERT INTO college_student (name, gender, phone_number, address, photo, deleted) VALUES (:name, :gender, :phone_number, :address, :photo, :deleted)";
 		$stmt = $this->db->prepare($query);
 		$stmt->bindParam(':name', $name);
 		$stmt->bindParam(':gender', $gender);
 		$stmt->bindParam(':phone_number', $phone_number);
 		$stmt->bindparam(':address', $address);
 		$stmt->bindParam(':photo', $photo);
 		$stmt->bindParam(':deleted', $deleted);
 		$stmt->execute();

 		$this->message = "Successfully add College student";

 		return $stmt;
	}

	public function showAll()
	{
		$query = "SELECT * FROM college_student WHERE deleted = 0";
		$stmt = $this->db->prepare($query); 
		$stmt->execute();

		return $stmt->fetchAll($this->db::FETCH_ASSOC);
	}
	public function edit($id, $name, $gender, $phone_number, $address, $deleted)
	{
		$query = "UPDATE college_student SET name=:name, gender=:gender, phone_number=:phone_number, address=:address, photo=:photo, deleted=:deleted WHERE id =:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':gender', $gender);
		$stmt->bindParam(':phone_number', $phone_number);
		$stmt->bindParam(':address', $address);
		$stmt->bindParam(':photo', $photo);
		$stmt->bindParam(':deleted', $deleted);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		$stmt->message = "College student successfully edited";

		return $stmt;
	} 

	public function showById($id)
	{
		$query = "SELECT * FROM college_student WHERE id =:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch($this->db::FETCH_ASSOC);
	}

	public function delete($id)
	{
		$query = "UPDATE college_student SET deleted = 1 WHERE id =:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		$stmt->message = "The College student has been removed";

		return $stmt;
	}
 }

?>