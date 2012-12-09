
  
<html>
    
    <head>
  
    </head>

<center><h1>MIS CANCIONES</h1></center>

<table border="1" width="65%" cellspacing="0" class="tablesorter">
  <thead>
    <tr>
    
      <th>Nombrecancion<a href="nombre"><img src="../../../web/images/check.jpg" width="30" height="30"</a></th>
     <th>Interprete<a href="interprete"><img src="../../../web/images/check.jpg" width="30" height="30"</a></th>
      <th>Album<a href="album"><img src="../../../web/images/check.jpg" width="30" height="30"</a></th>
      <th>Genero<a href="genero"><img src="../../../web/images/check.jpg" width="30" height="30"</a</th>
      <th>Eliminar</th>
      <th>Editar</th>
      
      
    </tr>
  </thead>
  
<?php
$reg_por_pagina_can=4;
@$nro_pagina_can=$_GET['num'];
if(is_numeric($nro_pagina_can)){
    $inicio =($nro_pagina_can-1)* $reg_por_pagina_can;
    
}
 else
    $inicio=0;
 $con = Doctrine_Manager::getInstance()->connection();
$consulta_can="select count(*) from canciones order by interprete"; 

 
$st_can = $con->execute($consulta_can);
$nro_reg_can = $st_can->fetchColumn();

if($nro_reg_can==0){
   echo 'no se han encontrado canciones';
}

 $consultapag_can= "select * from canciones order by interprete  limit $inicio,$reg_por_pagina_can";
 $stpag_can=$con->execute($consultapag_can);
 $rspag_can=$stpag_can->fetchAll();
 $can_paginas_can=$nro_reg_can / $reg_por_pagina_can;

?>
    
  
  
       <?php foreach ($rspag_can as $cancionesArray) :
    $canciones = new Canciones();
    $canciones->fromArray($cancionesArray);
    
    ?>
  <tbody>
      
        <tr>
             
            <td><?php echo $cancionesArray['nombreCancion'];?></td>
            <td><?php echo $cancionesArray['interprete'];?></td>
            <td><?php echo $cancionesArray['album'];?></td>
            <td><?php echo $cancionesArray['genero'];?></td>
               <td><?php echo link_to(image_tag('././././Trash_icon.png', array('alt'=>('Borrar'),'title'=>('Borrar'))),'canciones/delete?idcanciones='.$canciones->getIdCanciones(),array('post' => true, 'confirm' => 'Estas seguro que deseas eliminar?')) ?></td>
            <td><?php echo link_to(image_tag('././././Edit_icon.png', array('alt'=>('Editar'),'title'=>('Editar'))),'canciones/edit?idcanciones='.$canciones->getIdCanciones())?></td>
        
 
          </tr>
            

            </tbody>    
    <?php endforeach;?>
            
  </table>          

<div align="center">
        <?php
        if($nro_pagina_can>1)
           echo " <a href='?num=".($nro_pagina_can - 1)."'> Anterior </a> "." ";
        
    for($i=1;$i<=$can_paginas_can;$i++){
        
                  if($i ==$nro_pagina_can)

        echo " ".$i." "; 
         else  
         echo " " . "<a href='?num=$i'>$i</a>" ." ";
 }
 
 if($nro_pagina_can<$can_paginas_can)
           echo" ". "<a href='?num=".($nro_pagina_can + 1)."'>Siguiente</a>";
     
  ?>
</div>
  
</html>