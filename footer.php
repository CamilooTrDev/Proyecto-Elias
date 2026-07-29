<footer id="footer">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Acerca de</h3>
								<p>Fundados en 2022, combinamos ciencia, diseño y software para optimizar la acústica de todo entorno.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Región Metropolitana, Chile</a></li>
									<li><a href="tel:+56988636729"><i class="fa fa-phone"></i>(+56) 9 88636729</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>contacto@elias.cl</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorías</h3>
								<ul class="footer-links">
									<li><a href="#">Paneles Difusores</a></li>
									<li><a href="#">Paneles Absorventes</a></li>
									<li><a href="#">Resonadores Acústicos</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="acerca-de-nosotros.php">Nosotros</a></li>
									<li><a href="contacto.php">Contacto</a></li>
									<li><a href="políticas-y-privacidad.php">Políticas y Privacidad</a></li>
									<li><a href="términos-y-condicones.php">Términos & Condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Para ti</h3>
								<ul class="footer-links">
									<li><a href="store.php">Tienda</a></li>
									<li><a href="#">Personaliza tu panel</a></li>
									<li><a href="contacto.php">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="bottom-footer" class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center"><!--
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul> -->
							<span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Developed <i class="fa fa-code footer-ref" aria-hidden="true"></i> by <a class="footer-ref" href="https://torrescamilo.cl" target="_blank"> Camilo Torres</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

		<script>
		$(window).on('load', function () {
		  $('#page-loader').addClass('loaded');
		  setTimeout(function () {
		    $('#page-loader').remove();
		  }, 500);
		});
		</script>

		<script>
		$(document).ready(function () {
		$('.dropdown-toggle-mobile').on('click', function (e) {
			e.preventDefault();
			e.stopPropagation();
			var $li = $(this).closest('li');
			var wasOpen = $li.hasClass('open');
			$li.siblings().removeClass('open').find('li').removeClass('open');
			$li.toggleClass('open', !wasOpen);
		});
		});
		</script>

	</body>
</html>