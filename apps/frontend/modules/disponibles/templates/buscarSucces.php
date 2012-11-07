<?php use_helper("I18N");?>
<?php ?>
<div id="sf_admin_container">
    <center><h1>Buscar Libro</h1></center>
    <?php echo form_tag('libro/buscar', 'id=sf_admin_edit_form name=sf_admin_edit_form multipart=true') ?>

<fieldset id="sf_fieldset_none" class="">
    <div class="quick_search">
        <label for="nombre">Ingresar ISBN del libro:</label>
        <input type="text" name="txt_identificacion" id="search_keywords" />
    </div>
</fieldset>

 <ul class="sf_admin_actions">
     <input type="submit" value="Buscar" />
</ul>
<?php if (count($aLibro) > 1) {
        if ($txt_identificacion) { ?>
    <?php } ?>

<center><h1>Libro</h1></center>
<table border="1" cellspacing="0" class="tablesorter">
  <thead>
  <tr>
    <th>Isbn libro</th>
    <th>Título libro</th>
    <th>Año de publicación</th>
    <th>Idioma</th>
    <th>Area de conocimiento</th>
    <th>Editorial</th>
    <th>Imagen</th>
    <th>Disposición</th>
    <th>Cantidad de ejemplares</th>
    <th>Catalogado por</th>
    <th>Acciones</th>
  </tr>
  </thead>

  <tbody>
  <tr class="sf_admin_row">
      <td><?php echo $aLibro->getIsbn() ?></td>
      <td><?php echo $aLibro->getTitulolibro() ?></td>
      <td><?php echo $aLibro->getAnopublicacion() ?></td>
      <td><?php echo $aLibro->getIdioma() ?></td>
      <td><?php echo $aLibro->getAreaconocimiento() ?></td>
      <td><?php echo $aLibro->getEditorial() ?></td>
      <td><?php echo $aLibro->getImagen() ?></td>
      <td><?php echo $aLibro->getDisposicion() ?></td>
      <td><?php echo $aLibro->getCantidadejemplar() ?></td>
      <td><?php echo $aLibro->getCatalogadopor() ?></td>
    <td>
<!--    <ul class="sf_admin_td_actions">-->
     <?php echo link_to(image_tag('././././Edit_icon.png', array('alt'=>('Editar'),'title'=>('Editar'))),'libro/edit?isbn='.$aLibro->getIsbn()) ?>
     &nbsp;
     <?php echo link_to(image_tag('././././Trash_icon.png', array('alt'=>('Borrar'),'title'=>('Borrar'))),'libro/delete?isbn='.$aLibro->getIsbn(),array('post' => true, 'confirm' => 'Estas seguro que deseas eliminar?')) ?>
<!--    </ul>-->
    </td>
  </tr>
  </tbody>
</table>

<?php } else {
    if ($txt_identificacion) { ?>
        <h4 class="alert_error">
            El libro con ISBN <?php echo (($txt_identificacion)?$txt_identificacion:"") ?> no se encuentra registrado.</h4>
    <?php }
}
?>
</div>
