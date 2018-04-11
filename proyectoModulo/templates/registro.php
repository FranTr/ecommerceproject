<script src="<?php echo $root?>js/jquery.validate.min.js"></script>
<div class="container my-5">
    <form id="registro" method="post" action="<?php echo $root ?>registro/registrar.php">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" id="inputName" placeholder="nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAp1" class="col-sm-2 col-form-label">Apellido 1</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido1" id="inputAp1" placeholder="Apellido1">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAp2" class="col-sm-2 col-form-label">Apellido 2</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido2" id="inputAp2" placeholder="Apellido2">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="rePassword" id="inputrePassword" placeholder="Repita la Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-dark" id="#submit">Sign in</button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $("#registro").validate({

            rules: {
                nombre: {
                    required: true,
                    minlength: 3
                },
                apellido1: {
                    required: true,
                    minlength: 3
                },
                apellido2: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    minlength: 8
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 12
                },
                rePassword: {
                    required: true,
                    equalTo: '#inputPassword'
                }
            },
            messages: {
                nombre: "Debes introducir al menos 3 caracteres",
                email: "Debes introducir al menos 8 caracteres",
                apellido1: "Debes introducir al menos 3 caracteres",
                apellido2: "Debes introducir al menos 3 caracteres",
                password: "Debes introducir al menos 6 caracteres",
                rePassword: "No coinciden las contraseñas"
            }

        });

    });

</script>
