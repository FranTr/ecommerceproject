<form style="margin:5% 20%;" id="mod-producto" method="post" action="<?php echo $root?>eliminar_usuario/eliminar.php">
    <h2>Eliminar usuario</h2>
    <div class="form-group">
        <label for="namemodprod">Email</label>
        <input type="text" name="email" class="form-control" id="modproducto" aria-describedby="" placeholder="Introduce el email">
    </div>

    <button type="submit" class="btn btn-dark" id="submit">Borrar</button>
    <?php if(isset($users)) { ?>
    <h4>
        <?php echo $users ?>
    </h4>


    <?php }?>
    <br><br>
</form>
