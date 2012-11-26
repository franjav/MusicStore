
<html>
<center><h1> <?php echo $disponibles->getNombrecancion() ?></h1></center>
<table  border="1" width="65%" cellspacing="0" class="tablesorter">
  
    <tr>
      <th>Iddisponibles:</th>
      <td><?php echo $disponibles->getIddisponibles() ?></td>
    <tr>
      <th>Interprete:</th>
      <td><?php echo $disponibles->getInterprete() ?></td>
    </tr>
    <tr>
      <th>Album:</th>
      <td><?php echo $disponibles->getAlbum() ?></td>
    </tr>
    <tr>
      <th>Genero:</th>
      <td><?php echo $disponibles->getGenero() ?></td>
    </tr>
    <tr>
      <th>Ruta:</th>
      <td><?php echo $disponibles->getRuta() ?></td>
    </tr>
    <tr>
      <th>Precio:</th>
      <td><?php echo $disponibles->getPrecio() ?></td>
    </tr>
  
</table>

<hr />
<tr>
<a href="<?php echo url_for('disponibles/index') ?>"><img src="../../../../../web/images/atras.png" /></a> ATRAS
</tr>
</html>