<?php 
    $total = 0;
  while($total_precio = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) { 
        $total = $total + $total_precio["total"];                
     }
?>

<h1> TOTAL DE VENTAS: <?php echo $total ?> € </h1>
