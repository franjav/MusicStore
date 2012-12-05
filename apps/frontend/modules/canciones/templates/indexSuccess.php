<html>
    
    <head>
<script language="javascript" type="text/javascript" src="swfobject.js" ></script>  
    </head>

<center><h1>MIS CANCIONES</h1></center>

<table border="1" width="65%" cellspacing="0" class="tablesorter">
  <thead>
    <tr>
      <!--<th>Idcanciones</th>-->
      <th>Nombrecancion</th>
      <th>Interprete</th>
      <th>Album</th>
      <th>Genero</th>
      <th>Ruta</th>
      <th>Reproducir</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cancioness as $canciones): ?>
    <tr>
    
      <td><?php echo $canciones->getNombrecancion() ?></td>
      <td><?php echo $canciones->getInterprete() ?></td>
      <td><?php echo $canciones->getAlbum() ?></td>
      <td><?php echo $canciones->getGenero() ?></td>
      <td><?php echo $canciones->getRuta() ?></td>
      <td></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <!--<a href="<?php echo url_for('canciones/new') ?>">New</a>-->
</html>