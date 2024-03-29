﻿<?php
    include_once "header.php";
?>

	<div id="fh5co-contact" class="mb-50">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Aniversários</h2>
					<p>Lista de aniversário dos contatos cadastrados</p>
				</div>
			</div>
		</div>
		<div class="container animate-box">
            <div class="row">
                <div class="col-md-6">
                    <?php require "meses.php" ?>
                </div>
                <div class="col-md-6">
                    <h1>Gráfico</h1>
                    <?php require "graficos.php" ?>
                </div>
                </div>
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

	</body>
</html>

