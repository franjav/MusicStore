<?php decorate_with('layout')?>
<center><h1>MIS LISTAS DE REPRODUCCION</h1></center>

<table border="1" width="65%" cellspacing="0" class="tablesorter">
  <thead>
    <tr>
      <th>Nombrelistas</th>
      <!--<th>Loginduenolista</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listass as $listas): ?>
    <tr>
      <td><a href="<?php echo url_for('listas/show?nombrelistas='.$listas->getNombrelistas().'&loginduenolista='.$listas->getLoginduenolista()) ?>"><?php echo $listas->getNombrelistas() ?></a></td>
      <td><a href="<?php echo url_for('listas/show?nombrelistas='.$listas->getNombrelistas().'&loginduenolista='.$listas->getLoginduenolista()) ?>"><?php echo $listas->getLoginduenolista() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <!--<a href="<?php echo url_for('listas/new') ?>">New</a>-->
