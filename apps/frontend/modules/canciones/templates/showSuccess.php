<table>
  <tbody>
    <tr>
      <th>Idcanciones:</th>
      <td><?php echo $canciones->getIdcanciones() ?></td>
    </tr>
    <tr>
      <th>Nombrecancion:</th>
      <td><?php echo $canciones->getNombrecancion() ?></td>
    </tr>
    <tr>
      <th>Interprete:</th>
      <td><?php echo $canciones->getInterprete() ?></td>
    </tr>
    <tr>
      <th>Album:</th>
      <td><?php echo $canciones->getAlbum() ?></td>
    </tr>
    <tr>
      <th>Genero:</th>
      <td><?php echo $canciones->getGenero() ?></td>
    </tr>
    <tr>
      <th>Ruta:</th>
      <td><?php echo $canciones->getRuta() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('canciones/edit?idcanciones='.$canciones->getIdcanciones()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('canciones/index') ?>">List</a>
