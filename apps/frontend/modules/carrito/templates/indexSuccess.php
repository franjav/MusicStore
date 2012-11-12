<h1>Carritos List</h1>

<table>
  <thead>
    <tr>
      <th>Idcompra</th>
      <th>Logincomprador</th>
      <th>Idcancioncomprada</th>
      <th>Fecha</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($carritos as $carrito): ?>
    <tr>
      <td><a href="<?php echo url_for('carrito/show?idcompra='.$carrito->getIdcompra()) ?>"><?php echo $carrito->getIdcompra() ?></a></td>
      <td><?php echo $carrito->getLogincomprador() ?></td>
      <td><?php echo $carrito->getIdcancioncomprada() ?></td>
      <td><?php echo $carrito->getFecha() ?></td>
      <td><?php echo $carrito->getPrecio() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('carrito/new') ?>">New</a>
