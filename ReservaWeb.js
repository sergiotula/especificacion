/**
 * 
 */


document.title = "Todo a un click";

document.write('<center> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAADFCAMAAACM/tznAAAAhFBMVEX///8jHyC8ExgGAAC4AADqxcXt7e0XEBK0tLS8EBW+BRD57O28AADl5eUgGx0xLS6Qj48RCgx3dnb19PSamZnltbb89PRpZ2fAIyfy1dXb3N2cm5tGQ0Q3MzRPTE3n6uphXl+Bf4AUDhC6ubpZVlfR0NHira6npabEw8Ovr6+Ih4c9OjuDnR//AAACXklEQVR4nO3b3XKiMBiA4bCxUO2WimTrbouW+rOr9f7vr8LBSjDQ0CKB+j7TI5lh+F4dzNggBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACI2K8QC/F4Z02IqvP8P1tPKRkYSSXEzeinpdGfp4rz5ELvIUlf1/euhzVR0jOSz1mAsaUsgPk8mfD4FwYrKZO163HPqch80VEe4Iel+gCnEnLjux64rNMAnrda9O1u0HEAL5q5nrik6wCefHI9sq7zANHU9ci6zgOEieuRdZ0H8GS/boNKVlBnAUY1jgFqhFqAreuZNdv9rdF+Ww4w/lXt751fcZ7MelksIG9dz2xNCzCe5K/FL0WWn+Z5UAzw74KX3C5TgGlxzS8tv9S1ANndZSCMAYo3zdW1Bwg+FUBd8JLbRQACEKCdAGl5iTUQrQXYFVdJ+36tBOu0FmCoCEAAAhCAAAQgAAEIQAACEIAABCBA/hoBCECA5gH2U3Uy3V3wktvV4q/C0ck1/ip89f8XIAABCFAIMOz9AeraAzxrAeb+vQU//UZ7hPbafsCw5iEB7XmBYoBh7xLbWm+IrNKzfYJ1TAFeKnaWNgjQr52idUwBRBJ+PGOdcOl2qCaMAd6++BHo227xOsYA9ruizWQvH50yMwYQ8y99BOSr05GaMQeID6vPzx/17GmBeuYAIt7I4ONRTQI5H85XgCg/Nzg5HdhtpIyO65sGgiCSMh3OEiB3M/ldVDwU79RskxwWD1YWh2U6U9tBvfu5R8358dha99cOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoOfeAT9MTKt04IVAAAAAAElFTkSuQmCC"> </center>');




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
	  //Notar que <body> no existe al principio de la carga
	  document.body.appendChild(unFooter);
	})
	
