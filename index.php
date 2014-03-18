<?php
include "funciones/pagina.php";
if(isset($_GET['page']))
{
	$pagina = $_GET['page'];
	echo "<section>";
	if ($pagina == "")
		echo "</section>";
}

mostrar_header();
mostrar_login();
mostrar_cabecera();
mostrar_menu();

/*  Aqui va el contenido del sitio */
 
?>
 <section>
 	<article>
 	<h1>Ejemplo de contenido</h1>
 	<blockquote>Este es el contenido numero 1</blockquote>
 	</article>
 </section>
 
  <section>
  	<article>
 	<h1>Ejemplo de contenido</h1>
 	<blockquote>Este es el contenido numero 1</blockquote>
 	</article>
 </section>

 
<?php 
/* Fin contenido */

mostrar_pie();

?>