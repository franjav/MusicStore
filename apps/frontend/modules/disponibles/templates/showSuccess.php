<table>
  <tbody>
    <tr>
      <th>Iddisponibles:</th>
      <td><?php echo $disponibles->getIddisponibles() ?></td>
    </tr>
    <tr>
      <th>Nombrecancion:</th>
      <td><?php echo $disponibles->getNombrecancion() ?></td>
    </tr>
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
  </tbody>
</table>

<hr />
<!--
--><a href="<?php echo url_for('disponibles/edit?iddisponibles='.$disponibles->getIddisponibles()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('disponibles/index') ?>"><img src="../../../../../web/images/atras.png" /></a> 
