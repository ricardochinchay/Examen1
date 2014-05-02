<?php $this->load->view('header') ?>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="#" name="top">Aplicacion Examen</a>
          <ul class="nav">
            <li><a href="#"><i class="icon-home"></i> Examen General</a></li>
            <li class="divider-vertical"></li>
          </ul>
          <div class="btn-group pull-right">
            <?php if (!$is_admin) : ?>
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
    <div class="span3">

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
          <?php if(!$is_admin) :?><span class="badge badge-info">Alumno</span><?php endif ?>
        </div>
      </div>


      <!-- Message Box -->
      <div class="row well">
        
        <button id="btnPost" class="btn btn-info">Postear Mensaje</button>
      </div>

      </div> <!-- End Left Column -->

      <!-- Right Column -->
      <div class="span7 offset1">
      <div class="row">
        <h2>Examen de Religion</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, nesciunt sapiente minima commodi aperiam dolorem assumenda. Consequuntur, mollitia, ea minus delectus fuga recusandae distinctio harum! Asperiores tenetur officiis nesciunt totam?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ab, perspiciatis, ex, dolor sint dolore ipsam nulla laboriosam at minima voluptatem id ipsa quasi est sapiente exercitationem cupiditate illum. Nemo.</p>
      </div><!-- row -->
      </div><!-- End Right Column -->

  </div>
  </div>

<?php $this->load->view('footer') ?>