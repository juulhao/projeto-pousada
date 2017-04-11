<?php 

class Controller {

	public function __construct() {
		
	}

	public function loadView($view, $viewData = array()) {
		extract($viewData);
		
		include 'views/' . $view . '.php';
	}

	public function loadTemplate($view, $viewData = array()) {
		include 'views/template.php';
	}

	public function loadTemplateAdmin($view, $viewData = array()) {
		include 'views/admin/template.php';
	}

	public function loadViewTemplate($view, $viewData = array()) {
		extract($viewData);
		
		include 'views/' . $view . '.php';
	}

	public function exibeAlerta($tipo, $mensagem) {
		echo '<div class="alert alert-'.$tipo.'">
                      <button type="button" class="close" data-dismiss="'.$tipo.'">×</button>
                      '.$mensagem.'
              </div>';
	}
}