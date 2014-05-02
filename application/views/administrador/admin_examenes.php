<?php $this->load->view('header') ?>
<style type="text/css">
   .pill-content{
	    color: #FFFFFF;
	    background-color: #333;
	    border: 2px solid #000; 
	    border-radius: 5px 5px 5px 5px; 
	    height: 300px; 
	    margin-bottom: 10px; 
	    width: 500px;
	};
  </style>
<div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="#" name="top">Elija una Seccion</a>
          <ul class="nav">
            <li><a href="#"><i class="icon-home"></i> Home Administrador</a></li>
            <li class="divider-vertical"></li>
          </ul>
          <div class="btn-group pull-right">
            <?php if ($is_admin) : ?>
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-wrench"></i> administrar	<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" href="#myModal"><i class="icon-user"></i> Nuevo Usuario</a></li>
              <li><a data-toggle="modal" href="<?php echo base_url() ?>examenes/mostrar_principal"><i class="icon-folder-close"></i> Preparar Examen</a></li>
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
	<h1>Administrar Examenes</h1>
	<hr>
	<p>Elija el grado para preparar un examen</p>
	<br>
	<br>
	<br>
	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">1º Grado</a></li>
	    <li><a href="#tab2" data-toggle="tab">2º Grado</a></li>
	    <li><a href="#tab3" data-toggle="tab">3º Grado</a></li>
	    <li><a href="#tab4" data-toggle="tab">4º Grado</a></li>
	    <li><a href="#tab5" data-toggle="tab">5º Grado</a></li>
	    <li><a href="#tab6" data-toggle="tab">6º Grado</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="tab1">
	      <p>Examen para 1º Grado</p>
	    </div>
	    <div class="tab-pane" id="tab2">
	      <p>Examen para 2º Grado</p>
	    </div>
	    <div class="tab-pane" id="tab3">
	  		<p>Examen para 3º Grado</p>
	  	</div>
	  	<div class="tab-pane" id="tab4">

	  		
	  		<p>Examen para 4º Grado</p>
	  		<div class="tabbable pills">
	  			<div class="span2">
	  			<ul class="nav nav-pills">
		  			<li class="active"><a href="#pill1" data-toggle="pill">Pregunta 1</a></li>
		  			<li><a href="#pill2" data-toggle="pill">Pregunta 2</a></li>
		  			<li><a href="#pill3" data-toggle="pill">Pregunta 3</a></li>
		  			<li><a href="#pill4" data-toggle="pill">Pregunta 4</a></li>
		  			<li><a href="#pill5" data-toggle="pill">Pregunta 5</a></li>
		  			<li><a href="#pill6" data-toggle="pill">Pregunta 6</a></li>
		  			<li><a href="#pill7" data-toggle="pill">Pregunta 7</a></li>
		  			<li><a href="#pill8" data-toggle="pill">Pregunta 8</a></li>
		  			<li><a href="#pill9" data-toggle="pill">Pregunta 9</a></li>
		  			<li><a href="#pill10" data-toggle="pill">Pregunta10</a></li>
		  		</ul>	
	  			</div>
		  		<div class="span8">
		  		<div class="pill-content">
		  			<div class="pill-pane active" id="pill1">
		  				<h4>Enunciado de la pregunta 1</h4>

		  			</div>
		  			<div class="pill-pane" id="pill2">Enunciado de la pregunta 2</div>
		  			<div class="pill-pane" id="pill3">Enunciado de la pregunta 3</div>
		  			<div class="pill-pane" id="pill4">Enunciado de la pregunta 4</div>
		  			<div class="pill-pane" id="pill5">Enunciado de la pregunta 5</div>
		  			<div class="pill-pane" id="pill6">Enunciado de la pregunta 6</div>
		  			<div class="pill-pane" id="pill7">Enunciado de la pregunta 7</div>
		  			<div class="pill-pane" id="pill8">Enunciado de la pregunta 8</div>
		  			<div class="pill-pane" id="pill9">Enunciado de la pregunta 9</div>
		  			<div class="pill-pane" id="pill10">Enunciado de la pregunta 10</div>
		  		</div>
		  		</div>
		  		
	  		</div><!-- Fin tabbable -->


	  	</div>
	  	<div class="tab-pane" id="tab5">
	  		<p>Examen para 5º Grado</p>
	  	</div>
	  	<div class="tab-pane" id="tab6">
	  		<p>Examen para 6º Grado</p>
	  	</div>
	  </div><!-- Fin tab-content -->
	</div><!-- Fin tabbable -->
</div><!-- Fin container -->

<?php $this->load->view('footer') ?>



				