<table>
  <tbody>
    <tr>
      <th>Login:</th>
      <td><?php echo $usuarios->getLogin() ?></td>
    </tr>
    <tr>
      <th>Contrasena:</th>
      <td><?php echo $usuarios->getContrasena() ?></td>
    </tr>
    <tr>
      <th>Correo:</th>
      <td><?php echo $usuarios->getCorreo() ?></td>
    </tr>
    <tr>
      <th>Nombres:</th>
      <td><?php echo $usuarios->getNombres() ?></td>
    </tr>
    <tr>
      <th>Apellidos:</th>
      <td><?php echo $usuarios->getApellidos() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $usuarios->getSexo() ?></td>
    </tr>
    <tr>
      <th>Fechanacimiento:</th>
      <td><?php echo $usuarios->getFechanacimiento() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuarios/edit?login='.$usuarios->getLogin()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usuarios/index') ?>">List</a>
