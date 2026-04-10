
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cuestionrio</title>
<link rel="stylesheet" href="estilos2.css" type="text/css">
<meta name="viewport" content="width=device-width user-scalable=no, initial-scale=1.0, maximun-scale=1.0 minimun-scale=1.0">
</head>

	
<body>
	<div id="contenedor">
	  
	      
   <div id="nav">
     <header>
      <nav class="navegador">
        <ul class="menu">
          	<li><a href="Index.html">Página Principal</a></li>
          	<li><a href="">Contenido</a>
          	<ul class= "submenu1">
          	<li><a href="Conceptos.html">Sistema Reproductor Femenino</a></li>
          	<li><a href="Conceptos2.html">Sistema Reproductor Masculino</a></li>
          	<li><a href="Imágenes.html">Galería</a></li>
            </ul>
          	</li>
          	<li><a href="">Práctica</a>
          	<ul class = "submenu2">
          	<li><a href="RuedaDelAzar.html">Juego: Encuentra el nombre de la figura</a></li>
          	<li><a href="AplastaTopos.html">Juego: Aplasta Topos</a></li>
			<li><a href="salavirtual.html">Sala virtual</a></li>
          	<li><a href="Cuestionario.html">Cuestionario</a></li>
            </ul>
          	</li>
			
            <li><a href="">Tutoriales</a>
          	<ul class = "submenu3">
          	<li><a href="tutorial1.html">Tutorial 1</a></li>
          	<li><a href="tutorial2.html">Tutorial 2</a></li>
          	</ul>
          	</li>
          	<li><a href="">Quiénes somos</a>
          	<ul class = "submenu4">
          	<li><a href="quienesomos.html">Contacto</a></li>
          	<!--<li><a href="">Quiénes somos</a></li>-->
        	</ul>
        	</li>
	   </ul>
      </nav>
	</header>
   </div>
	
   <p><!---------------------------------------------------></p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
				<div id="cabecera">
	
					<table id="tabla2" width="800" border="1">
					<tbody>
					<tr>
					
					<td><h4> Asignatura: </h4><p>Ciencias naturales</p></td>
					<td><h4> Tema: </h4><p>Sistema reproductor de los seres humanos</p></td>
					
					<td>Nombre de estudiante: <?php $nombre = $_POST['id1']; echo($nombre);?></td>
					<td><h3>Calificación :  <span id="resultado"> </span></h3>
					</td>
					</tr>
					</tbody>
					</table>
				</div>
	
			   	<div id="centro3">
												
				<!------PRIMERA PREGUNTA-->
					<section id="p0">
								
					<h4>1 - ¿Es un órgano eréctil, responsable de las sensaciones sexuales. Es análogo al pene masculino.?</h4>
					<label>
					<input type="radio" value="1" name="p0" onClick="respuesta(0,this)">Cigoto
					</label>
					<label>
					<input type="radio" value="2" name="p0" onClick="respuesta(0,this)">Óvulo
					</label>
					<label>
					<input type="radio" value="3" name="p0" onClick="respuesta(0,this)">Clítoris
					</label>
					</section>
					<!------SEGUNDA PREGUNTA-->
				
					<section id="p1">
								
					<h4>2 - ¿Es el espacio en donde los óvulos esperan la llegada de los espermatozoides para ser fecundados?</h4>
					<label>
					<input type="radio" value="1" name="p1" onClick="respuesta(1,this)">Útero
					</label>
					<label>
					<input type="radio" value="2" name="p1" onClick="respuesta(1,this)">Óvulo
					</label>
					<label>
					<input type="radio" value="3" name="p1" onClick="respuesta(1,this)">Ovarios
					</label>
					</section>
							
					<!------TERCERA PREGUNTA-->
								
					<section id="p2">
								
					<h4>3 - ¿Producen las hormonas femeninas, los óvulos, células sexuales femeninas?</h4>
					<label>
					<input type="radio" value="1" name="p2" onClick="respuesta(2,this)">Cigoto
					</label>
					<label>
					<input type="radio" value="2" name="p2" onClick="respuesta(2,this)">Ovarios
					</label>
					<label>
					<input type="radio" value="3" name="p2" onClick="respuesta(2,this)">Óvulo
					</label>
						
					</section>
								
					<!------CUARTA PREGUNTA-->
								
					<section id="p3">
								
					<h4>4 - ¿Es una masa de tejido adiposo subcutáneo ubicada anterior a la sínfisis púbica y está cubierta con un parche triangular de vello púbico?</h4>
					<label>
					<input type="radio" value="1" name="p3" onClick="respuesta(3,this)">Cigoto
					</label>
					<label>
					<input type="radio" value="2" name="p3" onClick="respuesta(3,this)">Monte de venus
					</label>
					<label>
					<input type="radio" value="3" name="p3" onClick="respuesta(3,this)">Ovarios
					</label>
					
					</section>
					
					<!------QWUINTA PREGUNTA-->
					
					<section id="p4">
					
					<h4>5 - ¿Son dos pliegues cutáneos longitudinales cubiertos de vello púbico. Son la parte más lateral de la vulva y se extienden desde el monte del pubis hasta el periné?</h4>
					<label>
					<input type="radio" value="1" name="p4" onClick="respuesta(4,this)">Cigoto
					</label>
					<label>
					<input type="radio" value="2" name="p4" onClick="respuesta(4,this)">Trompas de Falopio
					</label>
					<label>
					<input type="radio" value="3" name="p4" onClick="respuesta(4,this)">Labios vaginales mayores
					</label>
					</section>
					
					<center>
					<table id="btnterminar" font-size="14" border="2">
					<tbody>
					<tr>
					<td>
					
					<br><button id="corregir" onClick="corregir()">Terminar</button><br>
					</td>
					<td>
					<br><button id="imprimir" onClick="imprimir()">Imprimir</button><br>
					
					</td>
					</tr>
					</tbody>
					</table><br>
					</cente>
				</div>
					
			    
				
				
	
</div>
	
	
<script src="script.js"></script>
	
	
</body>
</html>
