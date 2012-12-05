<?php
decorate_with('layout_sn');
if(isset($_GET['iddisponibles'])){
$_SESSION['recomendadas'][$_GET['iddisponibles']]=$_GET['iddisponibles'];
 }
 $cad1="";
foreach ($_SESSION['recomendadas'] as $rec)
{ 
    
    $cad1.=' or iddisponibles='.$rec;
}
  

//construimos la consulta
$query1 = "select * from musicstore.disponibles where iddisponibles=0 ". $cad1;


//obtenemos el singleton de la conexión
$con = Doctrine_Manager::getInstance()->connection();

//ejecutamos la consulta
$st1 = $con->execute($query1);

//recuperamos las tuplas de resultados
$rs1 = $st1->fetchAll();

 ?> 

<html>
<center><h1>TOP 5 (RECOMENDADOS)  </h1></center>
    <table border="1" width="65%" cellspacing="0" class="tablesorter">
    <thead>
    <tr>

      <th>IdDisponibles</th>
      <th>Nombre Canción</th>
      <th>Interprete</th>
      <th>Albúm</th>
      <th>Genero</th>
      <th>Precio $</th>
       <th></th>
      
    </tr>
  </thead>
  <?php foreach ($rs1 as $recomendadasArray) {
    $recdisponibles = new Disponibles();
    $recdisponibles->fromArray($recomendadasArray);
    ?>
 
  <tbody>
      
        <tr>
            <td><?php echo $recomendadasArray['idDisponibles'];?></td>    
            <td><?php echo $recomendadasArray['nombreCancion'];?></td>
            <td><?php echo $recomendadasArray['interprete'];?></td>
            <td><?php echo $recomendadasArray['album'];?></td>
            <td><?php echo $recomendadasArray['genero'];?></td>
            <td><?php echo $recomendadasArray['precio'];?></td>
            <td><a href="norecomend?iddisponibles=<?php echo $recdisponibles['iddisponibles'];?>"><img src="../../../web/images/Trash_icon.png"> </a> Borrar</td>
            
            </tr>
  </tbody>
  
        <?php
}
?>
    </table>
</html>
