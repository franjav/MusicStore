<!DOCTYPE html >
<layout name="layout"/>
<html lang="en">
  <head><meta charset="utf-8"/>

    <title> MUSIC STORE</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
       
  
		
  <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
</head>
  </head>
  <body>
      <header id="header">
        <hgroup>
        <h1 class="site_title"><a href="index.html">Website Admin</a></h1>
        <h2 class="section_title">MUSICSTORE</h2>
        <!--<a href="index.html"><img src="../../web/images/musicstore.png" width="100" height="45" style="padding: 6px;"></a>-->
        </hgroup>
      </header> <!-- end of header bar -->
      
      <section id="secondary_bar">
		<div class="user">
                    <p>Administrador (<a href="http://localhost/PhpProject3/apps/frontend/modules/login/login.php">Cerrar Sesi&oacute;n</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<aside id="sidebar" class="column">
		<form class="quick_search">
                </form>
		<hr/>

         <h3>Mi Perfil</h3>
                <ul class="toggle">
                    <li class="icn_edit_article"> <a href="<?php echo url_for('usuarios/new') ?>">Editar Perfil</a></li>
                </ul>
         <h3>Mis Canciones</h3>
		<ul class="toggle">
                    <li class="icn_categories"><a href="<?php echo url_for('canciones/index') ?>">Listar Canciones</a></li>
                    <li class="icn_new_article"><a href="<?php echo url_for('canciones/new') ?>">Subir Canciones</a></li>
                     <li class="icn_search"><a href="<?php echo url_for('canciones/buscar') ?>">Buscar Canciones</a></li>
              	</ul>
          <h3>Mis Listas</h3>
		<ul class="toggle">
                    <li class="icn_categories"><a href="<?php echo url_for('listas/index') ?>">Ver Listas</a></li>
                    <li class="icn_new_article"><a href="<?php echo url_for('listas/new') ?>">Crear Listas</a></li>
	  	</ul>
          <h3>Comprar Canciones</h3>
		<ul class="toggle">
                    <li class="icn_categories"><a href="<?php echo url_for('disponibles/index') ?>">Ver Canciones Disponibles</a></li>
                    <li class="icn_search"><a href="<?php echo url_for('disponibles/buscar') ?>">Buscar Canciones</a></li>
	  	</ul>

            <h3>Reportes</h3>
                <ul class="toggle">
                 <li class="icn_folder"><a href="<?php echo url_for('disponibles/graficar') ?>">Precios</a></li>
                  <li class="icn_folder"><a href="#">M&aacute;s compradas</a></li>
                  <li class="icn_folder"><a href="#">Ingresos ventas</a></li>
                  
                </ul>

                <footer>
                    <hr />
                    <p><strong>Copyright &copy; 2012 Marysoft</strong></p>
                    <p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
                </footer>
	</aside><!-- end of sidebar -->

        <section id="main" class="column">
		<center><h4 class="alert_info">Bienvenido Administrador </h4></center><!-- end of stats article -->
          
                <!-- ESTO PARA DARLE UN ESTILO A TODOS LOS FORMULARIOS EN ESTA SECCION -->
                <div id="wrapper">             
                     <?php echo $sf_content ?>                     
                </div>  
        </section>

        
        <aside id="rsidebar" class="column">
            <h3>PROMOCIONES DEL DIA</h3>
            
                <a href="<?php echo url_for('disponibles/index') ?>"> <img src="../../web/images/2x1.PNG" width="150" height="146" style="margin: 2%" /></a>
                <a href="<?php echo url_for('disponibles/index') ?>"><img src="../../web/images/40.png" width="150" height="146" style="margin: 2%"/></a> 
                <hr/>
                
                <h3>Top 5 de la semana</h3>
                <a href="<?php echo url_for('disponibles/recomend') ?>"> <img src="../../web/images/top5.PNG" width="150" height="146" style="margin: 2%" /></a>
               

               
	</aside>



        <section id="prueba">
            <center><embed src="../Reproductor Robnei/index.htm" name="obj1" width="410" height="600"></center>
        </section>

  </body>
</html>
