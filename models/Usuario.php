<?php 

class Usuario extends Model {

	protected $table = 'users';

	public function isLogged() {
		if (isset($_SESSION['session_usuario']) && ! empty($_SESSION['session_usuario']) ) {
			return true;
		} else {
			return false;
		}
	}

	public function fazerLogin($email, $senha) {
		$sql = "SELECT * FROM $this->table WHERE email = '$email' AND password = '$senha'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$result = $sql->fetch();
			$_SESSION['session_usuario'] = $result['id'];

			return true;
		}

		return false;
	}
}