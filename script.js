
// JavaScript Document
//arreglo que contiene las respuesta correctas
let correctas = [3,1,2,2,3];


//arreglo donde se guardan las respuestas del usuario
let opcion_elegida = [];
let cantidad_correctas = 0;


var form = HTMLDocument.getElementsByName('id1');
form.addEventListener('submit', function(e){
					  e.preventDefault();
					  var datos = FormData('form');
					  })





//función que toma el número de pregunta y el input elegido por esa pregunta
function respuesta (num_pregunta, seleccionada)
{
	//guardo la respuesta elegida
	opcion_elegida[num_pregunta] = seleccionada.value;
	//el siguiente código es para poner en color blanco el fondo de los inputs para cuando elige otra //opción
	
	id="p" + num_pregunta;
	label = document.getElementById(id).childNodes;
	label[3].style.backgroundColor = "white";
	label[5].style.backgroundColor = "white";
	label[7].style.backgroundColor = "white";
	//doy el color al laber seleccionado
	seleccionada.parentNode.style.backgroundColor = "#cec0fc";
}

//funcion que compara los arreglos para saber cuántas estuvieron mal
function corregir()
{

cantidad_correctas = 0;
	for( i=0; i < correctas.length; i++)
		{
			if(correctas[i]==opcion_elegida[i]){
					cantidad_correctas++;
				}
		}
	document.getElementById("resultado").innerHTML = cantidad_correctas;
	//alert("Tu califiación es:",cantidad_correctas);
	
	//alert(cantidad_correctas);
	
	
	
}


/*function registrar()
{
	
	
	var nombre = document.getElementById("id1").value;
	alert(nombre);
	window.location="JCtionario.html";
	//document.Prueba.id("id2").innerHTML = nombre;
	
	
}*/

function jugartopo()
{
	window.location="JTopos.html";
}

function juego1()
{
	window.location="JRazar.html";
}
	
function imprimir()
{
	window.print();
}
	
