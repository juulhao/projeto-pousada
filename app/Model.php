<?php 

class Model {

	protected $db;
	protected $table;

	public function __construct() {
		global $config;

		$this->db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['dbhost'], $config['dbuser'], $config['dbpass']);
	}

	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM $this->table";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$result = $sql->fetchAll();
		}

		return $result;
	}

	public function getById($id) {
		$sql = "SELECT * FROM $this->table WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() == 1) {
			$result = $sql->fetch();
		}

		return $result;
	}

	public function getByLimit($limite, $ordem) {
		$sql = "SELECT * FROM $this->table LIMIT $limite ORDER BY $ordem";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$result = $sql->fetchAll();
		} else {
			$result = $sql->fetch();
		}

		return $result;
	}

	public function getAllRecents() {
		$array = array();

		$sql = "SELECT * FROM $this->table ORDER BY id DESC";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function save($key, $value) {
		$sql = "INSERT INTO $this->table SET $key = '$value'";
		
		$this->db->query($sql);
	}

	public function delete($id) {
		$sql = "DELETE FROM $this->table WHERE id = '$id'";
		$sql = $this->db->query($sql);
	}
}