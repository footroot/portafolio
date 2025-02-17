<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Sing Up</legend>
		<div>
			<label for="email">Email: </label>
			<input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" required />
		</div>
		<div>
			<label for="nombre">Name: </label>
			<input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" required />
		</div>
		<div>
			<label for="m">Sexo: </label>
			<input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M"  />&nbsp;<label for="m">Male</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F"  />&nbsp;<label for="f">Female</label>
			<input type="radio" id="o" name="sexo_rdo" title="Tu sexo" values="O" />&nbsp;<label for="o">Other</label>
		</div>
		<div>
			<label for="nacimiento">Date Of Birth: </label>
			<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" required />
		</div>
		<div>
			<label for="telefono">Phone Number: </label>
			<input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Escribe tu teléfono" title="Tu teléfono" required />
		</div>
		<div>
			<label for="pais">Countrie: </label>
			<select id="pais" class="cambio" name="pais_slc" required>
				<option value="">- - -</option>
				<?php include("select-pais.php"); ?>
			</select>
		</div>
		<div>
			<label for="foto">Picture: </label>
			<div class="adjuntar-archivo cambio">
				<input type="file" id="foto" name="foto_fls" title="Sube tu foto" />
			</div>
		</div>
		<div>
			<input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="agregar" />
		</div>
		<?php include("php/mensajes.php"); ?>
	</fieldset>
</form>