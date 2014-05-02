<?php include 'header.php' ?>

  <div class="container">

    <div class="row">
      <div class="span4 offset4 well">

        <legend>Por favor Inicie Sesion</legend>

        <?php if (isset($error) && $error): ?>
          <div class="alert alert-error">
            <a class="close" data-dismiss="alert" href="#">×</a>Nombre de Usuario o Contraseña incorrecto !!
          </div>
        <?php endif; ?>

        <?php echo form_open('login/login_user') ?>

        <input type="text" id="dni" class="span4" name="dni" placeholder="Numero DNI">
        <input type="password" id="password" class="span4" name="password" placeholder="Contraseña">

        <!--<label class="checkbox">
          <input type="checkbox" name="remember" value="1"> Remember Me
        </label>-->

        <button type="submit" name="submit" class="btn btn-info btn-block">Iniciar Sesion</button>

        </form>
      </div>
    </div>

<?php include 'footer.php' ?>