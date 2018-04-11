<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <br>
            <h3>Resultados</h3>
        </div>

    </div>

    <div class="row">
        <?php while($busqueda = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) { 
                            ?>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="slider-item">
                <div class="slider-image">
                    <img src="<?php echo $root?>images/productos/<?php echo $busqueda["urlimagen"]?>" id="producto" class="img-responsive" alt="a" />
                </div>
                <div class="slider-main-detail">
                    <div class="slider-detail">
                        <div class="product-detail">
                            <h5>
                                <?php echo $busqueda["nombre"]?>
                            </h5>
                            <h5 class="detail-price">
                                <?php echo $busqueda["precio"]?>€</h5>
                        </div>
                    </div>
                    <div class="cart-section">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-6">
                                <button href="putasharry" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<br><br>
