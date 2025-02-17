<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Sign Up</legend>
		<div>
			<label for="email">Email: </label>
			<input type="email" id="email" class="cambio" name="email_txt" placeholder="Email" title="email" required />
		</div>
		<div>
			<label for="name">Name: </label>
			<input type="text" id="name_1" class="cambio" name="name_txt" placeholder="Name" title="name" required />
		</div>
        <div>
            <label for="surname">Surname: </label>
            <input type="text" id="surname" class="cambio" name="surname_txt" placeholder="Surname" title="surname" required />
        </div>
		<div>
			<label for="m">Sex: </label>
			<input type="radio" id="m" name="sex_rdo" title="sex" value="M" />&nbsp;<label for="m">Male</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sex_rdo" title="sex" value="F" />&nbsp;<label for="f">Femail</label>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" id="o" name="sex_rdo" title="sex" value="O" />&nbsp;<label for="o">Prefer Not To Say</label>
		</div>
		<div>
			<label for="birthday">Date of Birth : </label>
			<input type="date" id="birthday" class="cambio" name="birthday_txt" title="birthday" required/>
		</div>
		<div>
			<label for="phone">phone Number: </label>
			<input type="number" id="phone" class="cambio" name="phone_txt" placeholder="Phone Number" title="phone" required />
		</div>
		<div>
			<label for="country">Country: </label>
			<select id="country" class="cambio" name="country_slc" required >
				<option value="">- - -</option>
				<?php include("select-pais.php"); ?>
			</select>
		</div>
		<div>
			<label for="picture">Picture: </label>
			<div class="adjuntar-archivo cambio">
				<input type="file" id="picture" name="foto_fls" title="Sube tu foto" />
			</div>
		</div>
        <div>
            <label for="password_id">Password</label>
            <input type="password" id="password_id" class="cambio" name="password_txt" placeholder="Password" title="password" required  />
        </div>

<!-- ////////////////////////////////// -->
<!-- </div> -->
<!-- ////////////////// -->
		<div>
			<input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="agregar" />
		</div>
		<?php include("php/mensajes.php"); ?>
	</fieldset>
</form>