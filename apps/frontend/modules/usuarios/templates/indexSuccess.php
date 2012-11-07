<center><h1> MI PERFIL</h1></center>


<table border="1" width="65%" cellspacing="0" class="tablesorter">
  <thead>
    <tr>
      <!--<th>Login</th>-->
      <th>Contrasena</th>
      <th>Correo</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Sexo</th>
      <th>Fechanacimiento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarioss as $usuarios): ?>
    <tr>
      <td><a href="<?php echo url_for('usuarios/show?login='.$usuarios->getLogin()) ?>"><?php echo $usuarios->getLogin() ?></a></td>
      <td><?php echo $usuarios->getContrasena() ?></td>
      <td><?php echo $usuarios->getCorreo() ?></td>
      <td><?php echo $usuarios->getNombres() ?></td>
      <td><?php echo $usuarios->getApellidos() ?></td>
      <td><?php echo $usuarios->getSexo() ?></td>
      <td><?php echo $usuarios->getFechanacimiento() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <!--<a href="<?php echo url_for('usuarios/new') ?>">New</a>-->
