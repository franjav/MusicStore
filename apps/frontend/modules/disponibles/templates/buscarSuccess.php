<?php use_helper("I18N");?>
<?php ?>
<div id="sf_admin_container">
    <center><h1>Buscar Disponible</h1></center>
    <?php echo form_tag('disponibles/buscar', 'id=sf_admin_edit_form name=sf_admin_edit_form multipart=true') ?>

<fieldset id="sf_fieldset_none" class="">
    <div class="quick_search">
        <label for="nombre">Nombre de cancion:</label>
        <input type="text" name="txt_identificacion" id="search_keywords" />
    </div>
</fieldset>

 <ul class="sf_admin_actions">
     <input type="submit" value="Buscar" />
</ul>
<?php 



//$criterio = "";
//$txt_criterio = "";
//if ($_GET["criterio"]!=""){
//   $txt_criterio = $_GET["criterio"];
//   $criterio = " where nombreCancion like '%" . $txt_criterio . "%' or interprete like '%" . $txt_criterio . "%' or album like '%" . $txt_criterio . "%'";
//} 
//
//$sql="SELECT * FROM disponibles ".$criterio; 
//
//$res=mysql_query($sql);
//echo $res
if (count($aDisponibles) > 1) {
        if ($txt_identificacion) { ?>
    <?php } ?>

<center><h1>Disponibles</h1></center>
<table border="1" cellspacing="0" class="tablesorter">
  <thead>
  <tr>
    <th>Nombre Cancion</th>
    <th>Interprete</th>
    <th>Album</th>
    <th>genero</th>
    <th>Ruta</th>
    <th>Precio</th>
    
  </tr>
  </thead>

  <tbody>
  <tr class="sf_admin_row">
      
      <td><?php echo $aDisponibles->getnombreCancion () ?></td>
      <td><?php echo $aDisponibles->getinterprete() ?></td>
      <td><?php echo $aDisponibles->getalbum() ?></td>
      <td><?php echo $aDisponibles->getgenero() ?></td>
      <td><?php echo $aDisponibles->getruta() ?></td>
      <td><?php echo $aDisponibles->getprecio() ?></td>

  </tr>
  </tbody>
</table>

<?php } else {
    if ($txt_identificacion) { ?>
        <h4 class="alert_error">
            La canción con el nombre <?php echo (($txt_identificacion)?$txt_identificacion:"") ?> no se encuentra registrada.</h4>
    <?php }
}
?>
</div>
