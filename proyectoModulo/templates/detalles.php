<div class="container">
    <div class="row">

        <div style="margin-left:40%" class="col-md-6 col-sm-6 col-xs-12">
            <br>
            <h3>Carrito</h3>

        </div>
        <?php $total = 0; ?>
    </div>

    <div class="row">

        <?php 
            while($producto = sqlsrv_fetch_array($resultado_productos,SQLSRV_FETCH_ASSOC)){
                            ?>
        <div style="padding:10px" class="col-md-3 col-sm-3 col-xs-12">
            <div class="slider-item">
                <div class="slider-image">
                    <img src="<?php echo $root?>images/productos/<?php echo $producto["urlimagen"]?>" id="producto" class="img-responsive" alt="a" />
                </div>
                <div class="slider-main-detail">
                    <div class="slider-detail">
                        <div class="product-detail">
                            <h5>
                                <?php echo $producto["nombre"]?>
                            </h5>
                            <h5 class="detail-price">
                                <?php echo $producto["precio"]?>€</h5>
                            <form method="post" action="<?php echo $root?>mostrarCarrito/borrarProd.php">
                                <input type="hidden" name="idproducto" value="<?php echo $producto["idproducto"]?>">

                                <button class="btn btn-dark"><i  aria-hidden="FALSE" type="submit"></i> ELIMINAR</button>
                            </form>
                            <?php $total = $total + $producto["precio"];
                               ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }  ?>

    </div>

</div>
<div class="container">
    <div style="margin-left:40%" class="col-md-6 col-sm-6 col-xs-12">
        <br>
        <form method="post" action="<?php echo $root?>pagarCarrito/index.php">
            <input type="hidden" name="pagado" value=1>
            <h2>TOTAL:
                <?php echo $total ?> €
            </h2>
            <button class="btn btn-dark"><i  aria-hidden="FALSE" type="submit"></i> PAGAR</button>
        </form>
    </div>
</div>
<br><br>
