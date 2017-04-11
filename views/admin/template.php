<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Titulo</title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style-admin.css">
</head>
<body>
	<aside class="aside-admin">
		<header class="header-admin">
			<a href="#" class="header-admin-logo"> Sysadmin </a>
			<p class="header-admin-usuario">  </p>
		</header>

		<nav class="nav-admin">
			<a href="#" class="nav-admin-link"> Dashboard </a>
			<a href="#" class="nav-admin-link"> Usuários </a>
			<a href="#" class="nav-admin-link"> Posts </a>
			<a href="#" class="nav-admin-link"> Configurações </a>
		</nav>
	</aside>

	<main class="main-admin">
		<?php $this->loadViewTemplate($view, $viewData) ?>
	</main>
	
	<script src="//cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/App.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/AppController.js"></script>
</body>
</html>