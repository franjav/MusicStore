<?php

if(isset($_GET['iddisponibles'])){
$_SESSION['carrito'][$_GET['iddisponibles']]=$_GET['iddisponibles'];
 }
$cad="";
foreach ($_SESSION['carrito'] as $k)
{ 
    $cad.=' or iddisponibles='.$k;
}
  

//construimos la consulta
$query = "select * from musicstore.disponibles where iddisponibles=0 ". $cad;
$query2 = "select sum(A.precio) as PT from (select precio from disponibles where idDisponibles=0".$cad.") as A";

//obtenemos el singleton de la conexión
$con = Doctrine_Manager::getInstance()->connection();

//ejecutamos la consulta
$st = $con->execute($query);
$st2=$con->execute($query2);
//recuperamos las tuplas de resultados
$rs = $st->fetchAll();
$rs2 = $st2->fetchColumn();
 ?> 

<html>
<center><a><h1>CARRITO DE COMPRA <img src="../../../web/images/carrito.png"></a> </h1></center>
    <table border="1" width="65%" cellspacing="0" class="tablesorter">
    <thead>
    <tr>

      <th>IdDisponibles</th>
      <th>Nombre Canción</th>
      <th>Interprete</th>
      <th>Precio $</th>
       <th></th>
      
    </tr>
  </thead>
  <?php foreach ($rs as $disponiblesArray) {
    $disponibles = new Disponibles();
    $disponibles->fromArray($disponiblesArray);
    ?>
  <tbody>
      
        <tr>
            <td><?php echo $disponiblesArray['idDisponibles'];?></td>    
            <td><?php echo $disponiblesArray['nombreCancion'];?></td>
             <td><?php echo $disponiblesArray['interprete'];?></td>
            <td><?php echo $disponiblesArray['precio'];?></td>
            <td><a href="borrar?iddisponibles=<?php echo $disponibles['iddisponibles'];?>"><img src="../../../web/images/Trash_icon.png"> </a> Borrar</td>
            </tr>
            

        <?php
}
?>
    </table>
            <tr>
       <td>Precio total</td><td><?php echo "$". $rs2;?></td>
        </tr>
       <ul class="sf_admin_actions">
     <input type="submit" value="COMPRAR" method="POST" action="comprar" />
       
      
    
</body>
</html>



        



    
