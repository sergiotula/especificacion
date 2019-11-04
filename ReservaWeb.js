/**
 * 
 */


document.title = "Todo a un click";

document.write('\
\
    <header class="cartel">Todo a un Click</header\
\
');

/*
//Este código realiza la misma tarea que el document.write de arriba
var unHeader = document.createElement('header');
unHeader.className = "cartel";
unHeader.innerHTML = "Todo a un Click";
document.body.appendChild(unHeader);
*/

var unFooter = document.createElement('footer');
unFooter.className = "cartel";
unFooter.innerHTML = "Texto del footer";

//Agregar después de que la página se haya cargado
// para que quedé al final de la página
window.addEventListener('load', function () {
	  document.body.appendChild(unFooter);
	})
	
