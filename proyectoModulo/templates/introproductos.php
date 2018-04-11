<script src="<?php echo $root?>js/jquery-1.12.4.min.js"></script>
<script src="<?php echo $root?>js/jquery.validate.min.js"></script>
<form style="margin:5% 200px" id="mod-producto" method="post" action="<?php echo $root?>introducirProductos/introducir.php">
    <h2>Nuevo Producto</h2>
    <div class="form-group">
        <label for="namemodprod">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="modproducto" aria-describedby="" placeholder="Introduce el nombre">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" class="form-control" id="descmodproducto" placeholder="introduce una descripcion">
  </textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" name="precio" class="form-control" id="preciomodproducto" placeholder="introduce el precio">
    </div>
    <div class="form-group">
        <label for="ControlFile1">Selecione una imagen</label>
        <input type="file" name="imagen" class="form-control-file" id="imgmodproducto" eaccept="image/*">
    </div>
    <button type="submit" class="btn btn-dark" id="submit">Crear</button>
    <br>
    <br>
</form>
<form style="margin:5% 200px;" id="mod-producto" method="post" action="<?php echo $root?>introducirProductos/eliminar.php">
    <h2>Eliminar producto</h2>
    <div class="form-group">
        <label for="namemodprod">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="modproducto" aria-describedby="" placeholder="Introduce el nombre">
    </div>

    <button type="submit" class="btn btn-dark" id="submit">Borrar</button>
    <br>
    <br>
</form>

<script>
    $(document).ready(function() {
        $("#mod-producto").validate({

            rules: {
                nombre: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
                descripcion: {
                    required: true,
                    minlength: 5,
                    maxlength: 999
                },
                precio: {
                    required: true,
                    minlength: 2,
                    maxlength: 5
                }
            },
            messages: {
                nombre: "Debes introducir un nombre",
                descripcion: "Debes introducir almenos 5 caracteres",
                precio: "Debes introducir un precio",
            }

        });

    });

</script>
