<?php

//$id=$_GET['iddisponibles'];
//unset($_SESSION['carrito'][$_GET['iddisponibles']]);
if(isset($_GET['iddisponibles'])){
unset ($_SESSION['carrito'][$_GET['iddisponibles']]);
}
?>

<script>
location.href="add";
</script>