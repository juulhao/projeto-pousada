<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Titulo</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css ">
	
</head>
<body>

	<main>
		<?php $this->loadViewTemplate($view, $viewData) ?>
	</main>
	
	<script src="//cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/App.js"></script>
	<script src="<?php echo BASE_URL ?>/assets/js/AppController.js"></script>
</body>
</html>