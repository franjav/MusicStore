<!DOCTYPE html >
<layout name="layout"/>
<html lang="en">
  <head><meta charset="utf-8"/>

    <title> MUSIC STORE</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
                


         
        <script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
        <script type="text/javascript">  
            AudioPlayer.setup("http://localhost/musicstore/web/player.swf", {  
                width: 350 
            });  
        </script>  
  
		
  <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
</head>
  </head>
  <body>
      <header id="header">
        <hgroup>
        <h1 class="site_title"><a href="index.html">Website Admin</a></h1>
        <h2 class="section_title">MUSICSTORE</h2>
        <div class="btn_view_site"><a href="index.html"><img src="../../web/images/musicstore.jpeg" width="150" height="70" style="padding: 6px;"></a></div>
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
                    <li class="icn_add_user"> <a href="<?php echo url_for('usuarios/new') ?>">Editar Perfil</a></li>
                </ul>
         <h3>Mis Canciones</h3>
		<ul class="toggle">
                    <li class="icn_add_user"><a href="<?php echo url_for('canciones/new') ?>">Subir Canciones</a></li>
                    <li class="icn_search"><a href="<?php echo url_for('canciones/index') ?>">Listar Canciones</a></li>
              	</ul>
          <h3>Mis Listas</h3>
		<ul class="toggle">
                      <li class="icn_add_user"><a href="<?php echo url_for('listas/index') ?>">Ver Listas</a></li>
                      <li class="icn_add_user"><a href="<?php echo url_for('listas/new') ?>">Crear Listas</a></li>
	  	</ul>
          <h3>Comprar Canciones</h3>
		<ul class="toggle">
                  <li class="icn_new_article"><a href="<?php echo url_for('disponibles/index') ?>">Ver Canciones Disponibles</a></li>
                  <li class="icn_search"><a href="<?php echo url_for('disponibles/buscar') ?>">Buscar Canciones</a></li>
	  	</ul>

            <h3>Reportes</h3>
                <ul class="toggle">
                  <li class="icn_folder"><a href="#">M&aacute;s escuchadas</a></li>
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
          

    <section id="audioplayer_1" class="column">
        <script type="text/javascript">
    AudioPlayer.embed("audioplayer_1", {soundFile: "http://localhost/musicstore/web/pru.mp3"});
    var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
        </script>  
    </section>

   
             
           <?php echo $sf_content ?>
                 
                
                
          
                
        </section>

        
        
         <aside id="rsidebar" class="column">      
            <div class="CollapsiblePanelTab" tabindex="0">
              
                <div  id="banner" class="publicidad"> <h4 class="alert_info">PROMOCIONES DEL DIA</h4> 

                <a href="<?php echo url_for('disponibles/index') ?>"> <img src="../../web/images/2x1.PNG" width="150" height="146" style="padding: 10px;" /></a>
                <a href="<?php echo url_for('disponibles/index') ?>"><img src="../../web/images/40.png" width="150" height="146" style="padding: 10px;" /></a> 
                <a href="<?php echo url_for('disponibles/index') ?>"><img src="../../web/images/gratis.png" width="150" height="146" style="padding: 10px;" /></a> 
                <div id="CollapsiblePanel1" class="CollapsiblePanel">
  
            <div class="CollapsiblePanelContent"></div>
        </div>
    </div>
  </div>
                
           </aside>
  </body>
</html>