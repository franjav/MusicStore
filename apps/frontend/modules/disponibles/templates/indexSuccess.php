<center><h1>CANCIONES DISPONIBLES</h1></center>


<table border="1" width="65%" cellspacing="0" class="tablesorter">
  <thead>
    <tr>
      <!--<th>Iddisponibles</th>-->
      <th>Nombrecancion</th>
      <th>Interprete</th>
      <th>Album</th>
      <th>Genero</th>
      <th>Ruta</th>
      <th>Precio</th>
      <th>carro</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($disponibless as $disponibles): ?>
    <tr>
    
      <td><?php echo $disponibles->getNombrecancion() ?></td>
      <td><?php echo $disponibles->getInterprete() ?></td>
      <td><?php echo $disponibles->getAlbum() ?></td>
      <td><?php echo $disponibles->getGenero() ?></td>
      <td><?php echo $disponibles->getRuta() ?></td>
      <td><?php echo $disponibles->getPrecio() ?></td>
      <td><a href="carro.php?idDisponibles=<?php echo $f['idDisponibles'];?>"><img src="../../web/images/carrito.png"></a></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <!--<a href="<?php echo url_for('disponibles/new') ?>">New</a>-->