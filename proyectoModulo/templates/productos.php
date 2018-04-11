<section>
    <div class="container">
        <div class="row">
            <div style="margin-left:40%" class="col-md-6 col-sm-6 col-xs-12">
                <br>
                <h3>Nuestros productos</h3>
            </div>

        </div>

        <div class="row">
            <?php 
                    while($producto = sqlsrv_fetch_array($resultado_producto,SQLSRV_FETCH_ASSOC)) { 
                            ?>
            <form method="post" action="<?php echo $root?>carrito/index.php" style="padding:10px" class="col-md-3 col-sm-3 col-xs-12">
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
                                <input type="hidden" name="id" value="<?php echo $producto["idproducto"]?>">
                                <h5 class="detail-price">
                                    <?php echo $producto["precio"]?>€</h5>
                            </div>
                        </div>
                        <div class="cart-section">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-6">
                                    <button class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true" type="submit"></i> Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
    <br><br>



</section>
