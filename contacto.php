<?php
include("header.php");
?>
		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Contacto</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Inicio</a></li>
							<li>Contacto</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="split-intro">
							<div class="split-intro-text">
								<h2 class="title">Cuéntanos qué le pasa a tu sala</h2>
								<p>Sea una duda rápida sobre qué panel necesitas, una cotización para tu estudio o iglesia, o simplemente no sabes por dónde partir: escríbenos y te respondemos con una recomendación real, no un catálogo genérico.</p>
								<p>También puedes escribirnos directo por WhatsApp si prefieres algo más inmediato.</p>
							</div>
							<div class="split-intro-img">
								<img src="./img/sala_de_estudio.jpg" alt="Sala con tratamiento acústico">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">

					<div class="col-md-3 col-sm-6">
						<div class="info-card">
							<div class="info-icon"><i class="fa fa-phone"></i></div>
							<h4>Teléfono</h4>
							<p><a href="tel:+56988636729">(+56) 9 8863 6729</a></p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="info-card">
							<div class="info-icon"><i class="fa fa-envelope-o"></i></div>
							<h4>Email</h4>
							<p><a href="mailto:contacto@elias.cl">contacto@elias.cl</a></p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="info-card">
							<div class="info-icon"><i class="fa fa-map-marker"></i></div>
							<h4>Ubicación</h4>
							<p>Región Metropolitana, Chile</p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<div class="info-card">
							<div class="info-icon"><i class="fa fa-clock-o"></i></div>
							<h4>Horario</h4>
							<p>Lun a Vie, 9:00 - 18:00</p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- FORMULARIO DE CONTACTO -->
		<div id="contact-form-section" class="section">
			<div class="container">
				<div class="row">

					<div class="col-md-7">
						<h2>Escríbenos y <span>lo revisamos</span> contigo</h2>
						<p class="lead-text">Cuéntanos de tu espacio y qué problema acústico tienes. Un asesor te responde por email o teléfono, sin compromiso.</p>

						<form class="contact-form" action="#" method="post">

							<div class="form-row">
								<div class="form-group">
									<label for="cf-nombre">Nombre completo</label>
									<input class="input" type="text" id="cf-nombre" name="nombre" placeholder="Tu nombre" required>
								</div>
								<div class="form-group">
									<label for="cf-email">Correo electrónico</label>
									<input class="input" type="email" id="cf-email" name="email" placeholder="tucorreo@ejemplo.com" required>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="cf-telefono">Teléfono</label>
									<input class="input" type="tel" id="cf-telefono" name="telefono" placeholder="+56 9 ....">
								</div>
								<div class="form-group">
									<label for="cf-asunto">Asunto</label>
									<select class="input-select" id="cf-asunto" name="asunto">
										<option value="cotizacion">Cotización</option>
										<option value="asesoria">Asesoría técnica</option>
										<option value="soporte">Soporte post-venta</option>
										<option value="otro">Otro</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group">
									<label for="cf-mensaje">Mensaje</label>
									<textarea class="input" id="cf-mensaje" name="mensaje" placeholder="Cuéntanos las medidas de tu sala, qué problema tienes o qué necesitas..." required></textarea>
								</div>
							</div>

							<button type="submit" class="primary-btn">Enviar consulta</button>
						</form>
					</div>

					<div class="col-md-5">
						<div class="about-commit-img">
							<img src="./img/contacto-equipo.jpg" alt="Equipo Elias">
						</div>
					</div>

				</div>
			</div>
		</div>

<?php
include("footer.php");
?>