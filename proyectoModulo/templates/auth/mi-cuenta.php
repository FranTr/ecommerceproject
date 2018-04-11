<div class="container">
    <div class="row">
        <div class="col-sm-2 text right">
            <label>Nombre: </label>
        </div>
        <div class="col-sm-6">
            <?php echo $_SESSION["usuario"]["Nombre"]?>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-2 text right">
            <label>Email: </label>
        </div>
        <div class="col-sm-6">
            <?php echo $_SESSION["usuario"]["Email"]?>
        </div>
    </div>

</div>
