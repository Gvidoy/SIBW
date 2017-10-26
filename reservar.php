<div id="content">
	<div class="border-box container caja-reservar">
	  <div class="border-box row contact-header centrado">
			<h2>¡REALIZA TU RESERVA AHORA! &nbsp;</h2>

		
	  </div>
	  <div class="border-box row contact-body">
	  	
		
	    <form name = "login" id = "login" action="#" method="post">
	      <ul>
	        <li>
	          <p class="left">
	            <label for="inicio">Fecha de inicio<span class="rojo" id = "aviso_inicio">*</span></label>
	            <input class="border-box" type="date" name="fecha-inicio" id = "fecha-inicio" placeholder="dd/mm/aaaa" />
	          </p>
	          <p class="pull-right">
	            <label for="fin">Fecha de fin <span class="rojo" id = "aviso_fin">*</span></label>
	            <input class="border-box" type="date" name="fecha-fin" id = "fecha-fin" placeholder="dd/mm/aaaa" />
	          </p>
	        </li>
	        <li>
	          <p class="left">
	            <label for="inicio">Tipo de Habitación<span class="rojo" id = "aviso_habitacion">*</span></label>
	            <select for="inicio" name="tipo-habitacion-selector">
	            	<option value="1">Habitación Triple</option>
	            	<option value="2">Habitación Twin</option>
	            	<option value="3">Habitación Doble</option>
	            </select>
	          </p>
	          <p class="pull-right">
	            <label for="inicio">Actividad<span class="rojo" id = "aviso_actividad"></span></label>
	            <select for="inicio" name="tipo-habitacion-selector">
	            	<option value="1">Alhambra</option>
	            	<option value="2">Sierra Nevada</option>
	            	<option value="3">SEGWAY</option>
	            </select>
	          </p>
	        </li>
	        	<p class ="centrado" >
	        		<span class = "rojo" id = "resumen"> </span>
	 				<span class = "azul" id = "correcto"> </span>
	        	</p>
	        </li>
	        
	        <li>
	       
	          <input class="border-box btn btn-submit" type="button" id= "btn2" value="RESERVAR" onclick="funcionEnCuestion(this)" onClick="validar('login')"/>
	   
	        </li>
	        
	      </ul>
	     
	    </form>  
	  </div>
	</div>
	<div class="black-divider">
</div>