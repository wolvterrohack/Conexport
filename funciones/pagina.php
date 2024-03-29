<?php
function mostrar_header(){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Ejemplo de HTML5">
<meta name="keywords" content="Conexport, control de calidad, logistica, control calidad, calidad, automatizacion, servicios,concepcion, 8va region, controles,bodegaje, profesionales">
<link rel="stylesheet" href="conexport.css">
<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
    <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='scripts/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				
				height: '150px',
				pagination: false,
				thumbnails: true,
				time: 4000,
				
				
				
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
    
    
    
<title>Conexport</title>
</head>
	
	<?php 
		
}

function mostrar_login(){
 ?>
 <!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Bienvenido al area de clientes</h1>
				<h2>Ingresa con tu nombre de usuario y contraseņa</h2>	
                <br /><br />	
				<p class="grey">Podra acceder a todo el contenido exclusivo que conexport tiene para usted</p>
		
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1>Ingreso de usuarios</h1>
					<label class="grey" for="log">Usuario:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Contraseņa:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Recuerdame</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Ingresar" class="bt_login" />
					<a class="lost-pwd" href="#">Olvidaste tu contraseņa?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="#" method="post">
					<h1>Aun no eres usuario?, Registrate!</h1>				
					<label class="grey" for="signup">Usuario:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Correo:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>Un correo sera enviado a tu bandeja de entrada.</label>
					<input type="submit" name="submit" value="Registrate" class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hola invitado!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Area Cliente</a>
				<a id="close" style="display: none;" class="close" href="#">Cerrar Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
 
 <?php 

}

function mostrar_cabecera(){
	?>
	<header id="cabecera">
     <img src="img/logo4.png" />
    	
        
 
        
    </header>
        </header>
<div id="agrupar">

    <!-- CABECERA -->
    
	<?php 
}


function mostrar_menu(){
?>
<nav >
<ul id="nav">
<li><a href="#">Inicio</a>
 


</li>
<li><a href="#">Conexport</a>
<ul>
<li><a href="index.php?modulo=mision">Mision</a></li>
<li><a href="index.php?modulo=vision">Vision</a></li>
<li><a href="index.php?modulo=profesionales">Profesionales</a></li>
<li><a href="index.php?modulo=servicios">Servicios</a></li>
</ul></li>
<li><a href="index.php?modulo=control">Control de calidad</a></li>
<li><a href="index.php?modulo=logistica">Logistica Operativa</a></li>
<li><a href="index.php?modulo=clientes">Clientes</a><li>

<li><a href="index.php?modulo=contacto">Contacto</a></li>
</ul>
</nav>

<?php 
}
function mostrar_slide(){
?>
   <!-- SLIDE --> 
    <div class="fluid_container">
    	
        <div class="camera_wrap camera_blue_skin" id="camera_wrap_1">
            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Control de calidad. <em>Un servicio profesional</em>
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    Logistica operativa, <em>Un servicio profesional</em>
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/road.jpg" data-src="images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>Profesionales certificados</em> un servicio confiable
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/sea.jpg" data-src="images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Nuestros clientes</em> Casos de exito
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/shelter.jpg" data-src="images/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    Contacta con nuestros profesionales <em>Respuestas inmediatas</em> 
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/tree.jpg" data-src="images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Conexport, nuestra compaņia <em>Responsabilidad, seriedad, confianza.</em>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->

    </div>
    
    
    <!-- FIN SLIDE -->
    </section>
<?php 

}


function page_inicio(){
?>
  <section id="seccion">
        <article>
        <header>
            <h1>Mensaje de bienvenida a nuestros clientes.</h1>
            <time datetime="2011-12-15" pubdate>Publicado 01-01-2014
       		</time>
            </header>
            <img src="img/profesionales.jpg" />
            <span> Conexport se origina despues de observar la creciente demanda de servicios multidisciplinarios de las empresas nacionales, particularmente las establecidas a nivel regional.
<br />
Esta idea, fue consolidada gracias a la perseverancia y experticia de un grupo de asesores, lo cual proporcionan a Conexport un plus que le permite satisfacer las diversas demandas de sus clientes en las areas de Logistica y control de calidad.</span>
            
            <footer>
            <p>Leer mas..</p>
            </footer>
            
         </article>
         <article>
            <header>
            <h1>Lo que conexport representa como empresa.</h1>
            <time datetime="2011-12-15" pubdate>Publicado 01-01-2014
       		</time>
            </header>
            <img src="img/logo3.png" />
          <span> Conexport se origina despues de observar la creciente demanda de servicios multidisciplinarios de las empresas nacionales, particularmente las establecidas a nivel regional.
<br />
Esta idea, fue consolidada gracias a la perseverancia y experticia de un grupo de asesores, lo cual proporcionan a Conexport un plus que le permite satisfacer las diversas demandas de sus clientes en las areas de Logistica y control de calidad.</span>
<footer>
            <p>Leer mas..</p>
            </footer>
           
</article>
</section>
            
        </article>
    </section>
    <aside id="titulo_columna">
        <blockquote><h1> NOTICIAS </h1></blockquote>
    </aside>
    <aside id="columna">
    <header><h1>A nuestros clientes.</h1> </header>
    <img src="images/remodelar.jpg" width="100" height="70" style="alignment-adjust:middle"/>
        <blockquote>A partir de abril actualizaremos nuestro sistema informatico para brindar un mejor servicio</blockquote>
        
    </aside>
    <aside id="columna">
    <header><h1> De nuestro interes </h1></header>
        <blockquote>Invitamos a nuestros clientes y visitantes que nos contacten en caso de cualquier duda</blockquote>
 
    </aside>
   
    
   
<?php }
function mostrar_pie(){
?>
</div>
 <footer id="pie">
        Derechos Reservados &copy; 2014. Conexport.
    </footer>
</body>
</html>
<?php 



}
?>