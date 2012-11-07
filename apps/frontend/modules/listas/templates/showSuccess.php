<table>
  <tbody>
    <tr>
      <th>Nombrelistas:</th>
      <td><?php echo $listas->getNombrelistas() ?></td>
    </tr>
    <tr>
      <th>Loginduenolista:</th>
      <td><?php echo $listas->getLoginduenolista() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('listas/edit?nombrelistas='.$listas->getNombrelistas().'&loginduenolista='.$listas->getLoginduenolista()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('listas/index') ?>">List</a>
