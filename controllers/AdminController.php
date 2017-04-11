<?php 

class AdminController extends Controller {

	public function __construct() {
		parent::__construct();

		$usuario = new Usuario();

		if (! $usuario->isLogged()) {
			header('Location: ' . BASE_URL . 'login');
		}
	}

	public function painel() {
		$dados = array(
			'titutoTela' => 'Dashboard',
			'usuario'	 => $_SESSION['session_usuario']
		);

		$this->loadTemplateAdmin('admin/painel', $dados);
	}
}