<?php

if(isset($_GET['iddisponibles'])){
unset ($_SESSION['recomendadas'][$_GET['iddisponibles']]);
}
?>

<script>
location.href="recomend";
</script>