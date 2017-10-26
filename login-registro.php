<script src="js/validacion.js"></script>
<div id="content">
	<div class="border-box container caja-login">
	  <div class="border-box row contact-header centrado">
			<h2>¡CONSULTA AQUÍ TUS RESERVAS! &nbsp;</h2>
			<h5>Entra con tu usuario y contraseña para poder reservar y consultar tus reservas</h5>
	  </div>
	  <div class="border-box row contact-body">
	  	
		
	    <form name = "login" id = "login" action="checklogin.php" method="post">
	      <ul>

	        <li>
	          <p class="left">
	            <label for="email">E-mail <span class="rojo" id = "aviso_mail">*</span></label>
	            <input class="border-box" type="text" name="mail" id = "mail" placeholder="xxxxxx@xxxxx.xx" />
	          </p>
	          <p class="pull-right">
	            <label for="password">Pass <span class="rojo" id = "aviso_pass">*</span></label>
	            <input class="border-box" type="password" name="password" id = "password" placeholder="Su pass" />
	          </p>
	        </li>
	        	<p class ="centrado" >
	        		<span class = "rojo" id = "resumen"> </span>
	 				<span class = "azul" id = "correcto"> </span>
	        	</p>
	        
	        <li>
	       
	          <input class="border-box btn btn-submit" type="button" id= "btn" value="ingresar con mi usuario" onClick="validarLogin()" />
	   
	        </li>
	        
	      </ul>
	     
	    </form>  
	  </div>
	</div>
	<div class="border-box container caja-registro">
	  <div class="border-box row contact-header centrado">
			<h2>¡SI AÚN NO ESTÁS REGISTRADO, REGÍSTRATE! &nbsp;</h2>

		
	  </div>
	  <div class="border-box row contact-body">
	  	
		
	    <form name = "registro" id = "registro" action="registrar-usuario.php" method="post">
	      <ul>

	        <li>
	          <p class="left">
	            <label for="email">E-mail <span class="rojo" id = "aviso_mail">*</span></label>
	            <input class="border-box" type="text" name="mail" id = "mail" placeholder="xxxxxx@xxxxx.xx" />
	          </p>
	          <p class="pull-right">
	            <label for="password">Teléfono <span class="rojo" id = "aviso_telefono">*</span></label>
	            <input class="border-box" type="text" name="telefono" id = "telefono" placeholder="#########" />
	          </p>
	        </li>
	        <li>
	          <p class="left">
	            <label for="email">Contraseña <span class="rojo" id = "aviso_pass">*</span></label>
	            <input class="border-box" type="password" name="password" id = "password" placeholder="Su pass" />
	          </p>
	          <p class="pull-right">
	            <label for="password">Repita su contraseña <span class="rojo" id = "aviso_pass2">*</span></label>
	            <input class="border-box" type="password" name="password2" id = "password2" placeholder="Su pass" />
	          </p>
	        </li>
	        	<p class ="centrado" >
	        		<span class = "rojo" id = "resumen"> </span>
	 				<span class = "azul" id = "correcto"> </span>
	        	</p>
	        </li>
	        <li>
	          <p class="left">
	            <label for="inicio">Nombre<span class="rojo" id = "aviso_nombre">*</span></label>
	            <input class="border-box" type="text" name="nombre" id = "nombre"  />
	          </p>
	          <p class="pull-right">
	            <label for="inicio">Apellidos<span class="rojo" id = "aviso_apellidos">*</span></label>
	            <input class="border-box" type="text" name="apellidos" id = "apellidos"  />
	          </p>
	        </li>
	        <p class="pago-cabecera">Estos son tus datos de pago. Introdúcelos ahora y olvídate de volverlos a introducir cada vez que quieras reservar</p>
	        <li>
	          <p class="left">
	            <label for="inicio">NIF<span class="rojo" id = "aviso_nif">*</span></label>
	            <input class="border-box" type="text" name="nif" id = "nif" placeholder="########X" />
	          </p>
	          <p class="pull-right">
	            <label for="inicio">Número de Tarjeta de Crédito<span class="rojo" id = "aviso_numero_tarjeta">*</span></label>
	            <input class="border-box" type="text" name="numero_tarjeta" id = "numero_tarjeta" placeholder="####-####-####-####" />
	          </p>
	        </li>
	        
	        <li>
	          <p class="left">
	            <label for="inicio">Fecha de caducidad<span class="rojo" id = "aviso_fecha_tarjeta">*</span></label>
	            <input class="border-box" type="text" name="fecha_tarjeta" id = "fecha_tarjeta" placeholder="mm/aaaa" />
	          </p>
	          <p class="pull-right">
	            <label for="inicio">Código de seguridad<span class="rojo" id = "aviso_codigo_tarjeta">*</span></label>
	            <input class="border-box" type="text" name="codigo_tarjeta" id = "codigo_tarjeta" placeholder="###" />
	          </p>
	        </li>
	        	<p class ="centrado" >
	        		<span class = "rojo" id = "resumen2"> </span>
	 				<span class = "azul" id = "correcto"> </span>
	        	</p>
	        <li>
	       
	          <input class="border-box btn btn-submit" type="button" id= "btn2" value="REGISTRARME" onClick="validarRegistro()"/>
	   
	        </li>
	        
	      </ul>
	     
	    </form>  
	  </div>
	</div>
<div class="black-divider">
</div>