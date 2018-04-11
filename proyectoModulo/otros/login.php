<div class="container my-5">
    <?php if(isset($error)) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
    <?php } ?>
    <form  class="form-signin" method="POST" id="login" action="<?php echo $root ?>login/auth.php">
        
            <h1 class="h3 mb-3 font-weight-normal">INICIO SESION</h1>
            <label for="InputEmail1" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">

            <label for="InputPassword1" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">


        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
    </form>
</div>
<style> 

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
<script>
    $(document).ready(function() {

        $("#login").validate({

            rules: {
                email: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 3
                }
            },
            messages: {
                email: "Debes introducir un email",
                password: "Debes introducir un password"
            }
        })

    });

</script>