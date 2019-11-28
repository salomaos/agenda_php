<?php
    include_once "header.php";
?>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Cadastro de Contatos</h2>
					<p>Forneça os dados de seus contatos para usufruir do sistema de agenda de contatos.</p>
				</div>
			</div>
		</div>
		<div class="container">
            <div class="row animate-box">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form name='form3' id='form3' method='post' action='gravacontato.php'>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nome" name="name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Apelido" name="apelido">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<input type="Whatsapp" class="form-control" placeholder="Whatsapp" name="whatsapp">
						</div>
						<div class="form-group">
							<input type="date" class="form-control" placeholder="mm/dd/yyyy (níver)" name="nascimento">
						</div>
						<div class="form-group">
							<div id="imendaHTMLTelefone"></div>
		
							<a href="#" id="btnAdicionaTelefone" ><i class="fa fa-plus"></i> Adicionar telefone</a>
						</div>
						<div class="form-group">
							<button type="submit" value="Enviar" class="btn btn-primary btn-forms" name="cad_contato">Cadastrar</button>
						</div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
			</div>
	</div>
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- Adiciona telefone -->
	<script src="js/addtelefone.js"></script>

	</body>
</html>

