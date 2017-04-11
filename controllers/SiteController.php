<?php 

class SiteController extends Controller {

	public function index() {
		$dados = array();

		$this->loadTemplate('home', $dados);
	}

	public function sobre() {
		$dados = array();

		$this->loadTemplate('sobre', $dados);
	}
}