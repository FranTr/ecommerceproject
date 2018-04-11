<script src="<?php echo $root?>js/jquery.validate.min.js"></script>
<div id="home">
    <div id="carouselExampleControls" class="carousel slide carousel-collapse" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo $root?>images/Banner.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo $root?>images/banner1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo $root?>images/banner2.jpg" alt="Third slide">
            </div>
        </div>
    </div>
</div>
<div id="ofertas">
    <div style="margin-left:50%" class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <br>
            <h2>Más Vendidos</h2>
        </div>

    </div>
    <div style="margin-left:10%" class="row">
        <?php 
                    while($producto = sqlsrv_fetch_array($resultado_producto,SQLSRV_FETCH_ASSOC)) { 
                            ?>
        <form method="post" action="<?php echo $root?>carrito/index.php" style="padding:5px" class="col-md-3 col-sm-3 col-xs-12">
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
                            <h5 class="detail-price" >
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
<!---------------------------- contacto ---------------------------------------->
<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Contacta con <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">  nosotros</span></h1>
    </div>
    <div class="contact-section">
        <div class="container">
            <form id="contacto" method="post" action="<?php echo $root ?>contacto/contactar.php">
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">nombre</label>
                        <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telefono</label>
                        <input type="tel" name="telefono" class="form-control" id="telephone" placeholder=" teléfono">
                    </div>
                </div>
                <div id="message" class="col-md-6 ">
                    <div class="form-group">
                        <label for="description"> Mensaje</label>
                        <textarea name="mensaje" class="form-control" id="description" placeholder="Introduzca su mensaje"></textarea>
                    </div>
                    <div>

                        <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        $("#contacto").validate({

            rules: {
                nombre: {
                    required: true,
                    minlength: 3,
                    maxlength: 40
                },
                email: {
                    required: true,
                    minlength: 8,
                    maxlength: 100
                },
                telefono: {
                    required: true,
                    maxlength: 16
                },
                mensaje: {
                    required: true,
                    maxlength: 300
                }
            },
            messages: {
                nombre: "Debes introducir entre 3 y 40 caracteres",
                email: "Debes introducir entre 8 y 100 caracteres",
                telefono: "Debes introducir un teléfono",
                mensaje: "Debes introducir un mensaje"
            }

        });

    });

</script>
