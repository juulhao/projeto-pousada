class App {


	constructor() {
		this.email;
		this.senha;
	}

	carregar() {
		this.esconderAlerta();
	}

	esconderAlerta() {
		$('body').on('click', '.close', function(e) {
			e.preventDefault();

			$(this).parents('.alert').fadeOut('slow');
		});
	}
}