<table>
  <tbody>
    <tr>
      <th>Idcompra:</th>
      <td><?php echo $carrito->getIdcompra() ?></td>
    </tr>
    <tr>
      <th>Logincomprador:</th>
      <td><?php echo $carrito->getLogincomprador() ?></td>
    </tr>
    <tr>
      <th>Idcancioncomprada:</th>
      <td><?php echo $carrito->getIdcancioncomprada() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $carrito->getFecha() ?></td>
    </tr>
    <tr>
      <th>Precio:</th>
      <td><?php echo $carrito->getPrecio() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('carrito/edit?idcompra='.$carrito->getIdcompra()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('carrito/index') ?>">List</a>
