<nav class="navbar navbar-expand-lg navbar-light">
    <a class="nav-link" href="#"><img src="<?php echo $root?>/images/logo.png"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $root?>">Inicio</a>
            </li>
         <!--   <?php if( isset($_SESSION[ "usuario"]) && $_SESSION[ "usuario"][ "privilegio"] !=1 ) { ?>
            <li class="nav-item">
                <a class="nav-link" href="#">Mis Pedidos</a>
            </li>
            <?php } ?> -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $root?>producto/index">Vinos</a>
            </li>
            <!-- <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Vinos
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Vino Blanco</a>
                    <a class="dropdown-item" href="#">Vino Tinto</a>
                </div> 
            </li>     si da tiempo desarrollo categorias -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Denominaciones</a>
            </li>-->
            <li class="nav-item active">
                <a class="nav-link " href="<?php echo $root?>index.php#ofertas">Ofertas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="<?php echo $root?>index.php#contact">Contacto</a>
            </li>
            <?php if( isset($_SESSION[ "usuario"]) && $_SESSION[ "usuario"][ "privilegio"]==1 ) { ?>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Administracion
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo $root?>introducirProductos">Añadir Productos</a>
                    <a class="dropdown-item" href="<?php echo $root?>eliminar_usuario">Eliminar usuarios</a>
                    <a class="dropdown-item" href="<?php echo $root?>historial">Historial de pedidos</a>
                </div>
            </li>
            <?php } ?>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo $root ?>busqueda/index.php">
            <input id="buscar" class="form-control mr-sm-2" type="input" name="buscar" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0 btn-lg" type="submit">Buscar</button>
        </form>
        <form class="form-inline my-2 my-lg-0">

            <a href="<?php echo $root?>mostrarCarrito/index.php" class="btn btn-outline-dark my-2 my-sm-0 btn-lg"><i class="fas fa-cart-plus"></i>
        </a>

            <?php if( isset($_SESSION[ "usuario"]) ) { ?>

            <a class="btn btn-outline-dark my-2 my-sm-0 btn-lg" id="cuenta" href="<?php echo $root?>micuenta/index.php">
                <?php echo $_SESSION[ "usuario"][ "Nombre"]?>
            </a>
            <a class="btn btn-outline-dark my-2 my-sm-0 btn-lg" id="cerrar-sesion" href="<?php echo $root ?>login/close.php">Cerrar sesion</a>

            <?php } else { ?>
            <a class="btn btn-outline-dark my-2 my-sm-0 btn-lg" href="<?php echo $root?>registro/" role="button">Sign Up</a>

            <a class="btn btn-outline-dark my-2 my-sm-0 btn-lg" href="<?php echo $root ?>login/index.php"><i class="fas fa-user"></i></a>

            <?php } ?>
        </form>
    </div>
</nav>
