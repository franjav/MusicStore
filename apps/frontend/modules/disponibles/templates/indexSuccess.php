

<html>
<center><h1>CANCIONES DISPONIBLES</h1></center>

<table border="1" width="65%" cellspacing="0" class="tablesorter">
  <thead>
    <tr>
      
      <th>Nombrecancion</th>
      <th>Interprete</th>
      <th>Album</th>
      <th>Genero</th>
      <th>Recomendar</th>
      <th>Precio $</th>
      <th>carro</th>
    </tr>
  </thead>
  <tbody>
      
<?php
        




$reg_por_pagina=4;
@$nro_pagina=$_GET['num'];
if(is_numeric($nro_pagina)){
    $inicio =($nro_pagina-1)* $reg_por_pagina;
    
}
 else
    $inicio=0;
 $con = Doctrine_Manager::getInstance()->connection();
$consulta="select count(*) from disponibles order by idDisponibles"; 

 
$st = $con->execute($consulta);
$nro_reg = $st->fetchColumn();

if($nro_reg==0){
   echo 'no se han encontrado productos';
}

 $consultapag= "select * from disponibles order by idDisponibles limit $inicio,$reg_por_pagina";
 $stpag=$con->execute($consultapag);
 $rspag=$stpag->fetchAll();
 $can_paginas=$nro_reg / $reg_por_pagina;





?>
    
  
      <?php foreach ($rspag as $disponiblesArray) :
    $disponibles = new Disponibles();
    $disponibles->fromArray($disponiblesArray);
    ?>
  <tbody>
      
        <tr>
             
            <td><?php echo $disponiblesArray['nombreCancion'];?></td>
            <td><?php echo $disponiblesArray['interprete'];?></td>
            <td><?php echo $disponiblesArray['album'];?></td>
            <td><?php echo $disponiblesArray['genero'];?></td>
             <td><a href="disponibles/recomend?iddisponibles=<?php echo $disponibles['iddisponibles'];?>">Recomendar</a></td>
            <td><?php echo $disponiblesArray['precio'];?></td>
           <td><a href="disponibles/add?iddisponibles=<?php echo $disponibles['iddisponibles'];?>"><img src="../../web/images/carrito.png"></a></td>
 
            </tr>
            

            </tbody>    
    <?php endforeach;
    ?>
            
  </table>          
<div align="center">
        <?php
        if($nro_pagina>1)
           echo " <a href='?num=".($nro_pagina - 1)."'> Anterior </a> "." ";
        
    for($i=1;$i<=$can_paginas;$i++){
        
                  if($i ==$nro_pagina)

        echo " ".$i." "; 
         else  
         echo " " . "<a href='?num=$i'>$i</a>" ." ";
 }
 
 if($nro_pagina<$can_paginas)
           echo" ". "<a href='?num=".($nro_pagina + 1)."'>Siguiente</a>";
     
  ?>
</div>
  


</html>