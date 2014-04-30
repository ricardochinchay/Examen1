<?php $this->load->view('header') ?>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="#" name="top">Aplicacion para Administrador</a>
          <ul class="nav">
            <li><a href="#"><i class="icon-home"></i> Home</a></li>
            <li class="divider-vertical"></li>
          </ul>
          <div class="btn-group pull-right">
            <?php if ($is_admin) : ?>
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-wrench"></i> administrar	<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" href="#myModal"><i class="icon-user"></i> Nuevo Usuario</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url() ?>login/logout_user"><i class="icon-share"></i> Salir</a></li>
            </ul>
            <?php else : ?>
              <a class="btn" href="<?php echo base_url() ?>login/logout_user"><i class="icon-share"></i> Salir</a>
            <?php endif; ?>
          </div>
      </div>
      <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
  </div>
  <!--/.navbar -->

  <div class="container">

    <!-- Left Column -->
    <div class="span5 offset1">

      <!-- User Info -->
      <div class="row well userInfo">
        <div class="span1">
          <img src="../assets/img/avatars/<?php echo $avatar ?>.png" alt="Administrador">
        </div>
        <div class="span2 userInfoSpan2">
          <p><strong> <?php echo $nombre ?> </strong></p>
        </div>
        <div class="span2 userInfoSpan2">
          <p id="pTagline" contenteditable="true"><?php echo $mensaje ?></p>
        </div>
        <div class="userTeamBadge">
          <?php if($is_admin) :?><span class="badge badge-info">Administrador</span><?php endif ?>
        </div>
      </div>


      <!-- Message Box -->
      <div class="row well">
        <textarea class="span4" id="txtNewMessage" name="txtNewMessage"
                  placeholder="Escriba su mensaje" rows="5"></textarea>
        <h6 class="pull-right"><span id="spanNumChars">320</span> caracteres restantes</h6>
        <button id="btnPost" class="btn btn-info">Postear Mensaje</button>
      </div>

      </div> <!-- End Left Column -->

      <!-- Right Column -->
      <div class="span4 offset1">
      <div class="row">
        <?php if ( isset($other_posts) ) : ?>
          <h4>What Others are Saying:</h4>
            <div id="otherMessages">
              <?php foreach( $other_posts as $o_post ) : ?>
                  <div class="otherPost well">
                    <div class="otherAvatar">
                      <img src="../../assets/img/avatars/<?php echo $o_post['avatar'] ?>.png"
                           alt=""
                           data-title="&lt;span class='badge badge-info'&gt;<?php echo $o_post['teamId'] ?>&lt;/span&gt; <?php echo $o_post['firstName'] ?> <?php echo $o_post['lastName'] ?>"
                           data-content="<?php echo $o_post['tagline'] ?>" >
                    </div>
                    <div class="otherPostInfo">
                      <div class="otherPostBody"><p></p><?php echo $o_post['body'] ?></p></div>
                      <hr/>
                      <div class="otherPostDate"><p class="pull-right"><?php echo $o_post['createdDate'] ?></p></div>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
        <?php else : ?>
          <div>
            <h4>There are no messages from other users!</h4>
          </div>
        <?php endif; ?>
      </div><!-- row -->
      </div><!-- End Right Column -->

  </div>
  </div>


  <!-- ****************************************************************** -->
  <!--                        NEW USER Modal Window                       -->
  <!-- ****************************************************************** -->

  <div class="modal hide" id="myModal">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">x</button>
      <h3>Datos Nuevo Alumno</h3>
    </div>
    <div class="modal-body">
        <p><input type="text" class="span4" name="nombre" id="nombre" placeholder="Nombre"></p>
        <p><input type="text" class="span4" name="apellido1" id="apellido1" placeholder="Apellido Paterno"></p>
        <p><input type="text" class="span4" name="apellido2" id="apellido2" placeholder="Apellido Materno"></p>
        <p><input type="text" class="span4" name="dni" id="dni" placeholder="Dni"></p>
        <p>
          <select class="span4" name="grado" id="grado">
            <option value="">Grado</option>
            <option value="1">1º Grado</option>
            <option value="2">2º Grado</option>
            <option value="3">3º Grado</option>
            <option value="4">4º Grado</option>
            <option value="5">5º Grado</option>
            <option value="6">6º Grado</option>
          </select>
        </p>
        <p>
          <select class="span4" name="seccion" id="seccion">
            <option value="">Seccion</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
          </select>
        </p>
        <!--
        <p>
          <label class="radio span4">
            <input type="radio" id="sexo_f" name="sexo" value="2" checked> Femenino
          </label>
        </p>
        <p>
          <label class="radio span4">
            <input type="radio" id="sexo_m" name="sexo" value="1"> Masculino
          </label>
        </p>
        -->
        <p>
          <select class="span4" name="sexo" id="sexo">
            <option value="2">Femenino</option>
            <option value="1">Masculino</option>
          </select>
        </p>
        <p><input type="password" class="span4" name="password" id="password" placeholder="Password"></p>
        <p><input type="password" class="span4" name="password2" id="password2" placeholder="Confirma Password"></p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-warning" data-dismiss="modal">Cancel</a>
      <a href="#" id="btnModalSubmit" class="btn btn-primary">Crear</a>
    </div>
  </div>
<?php $this->load->view('footer') ?>