<?php 

class LoginController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$dados = array();

		if (isset($_POST['email']) && ! empty($_POST['email'])) {
			$email = addslashes($_POST['email']);
			$senha = md5($_POST['password']);

			$usuario = new Usuario();

			if ($usuario->fazerLogin($email, $senha)) {
				$this->exibeAlerta('success', 'Usuário logado com sucesso!');
				
				header('Refresh: 3, ' . BASE_URL . 'admin/painel');
			}
		}

		$this->loadView('admin/index', $dados);
	}
}