<?php

class principal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
/*
    if( !$this->session->userdata('isLoggedIn') ) {
        redirect('/login/show_login');
    }
*/
  }

  /**
   * This is the controller method that drives the application.
   * After a user logs in, show_main() is called and the main
   * application screen is set up.
   */
  function mostrar_principal() {
    //$this->load->model('preguntas_m');
    //$this->load->model('respuestas_m');
    $data['mensaje'] = "Desde aqui puede agregar alumnos y preparar examenes";
    // Get some data from the user's session
    $is_admin = $this->session->userdata('isAdmin');
    $data['is_admin'] = $is_admin;
    $data['dni'] = $this->session->userdata('dni');
    $data['nombre'] = $this->session->userdata('nombre');
    $data['grado'] = $this->session->userdata('grado');
    $data['seccion'] = $this->session->userdata('seccion');
    $data['avatar'] = $this->session->userdata('avatar');
    $data['sexo'] = $this->session->userdata('sexo');

    if ( $is_admin ) {
      $this->load->view('main',$data);      
    } else {
      $this->load->view('usuario',$data);
    }

  }

  function post_message() {
    $message = $this->input->post('message');

    if ( $message ) {
      $this->load->model('post_m');
      $saved = $this->post_m->save_post($message);
    }

    if ( isset($saved) && $saved ) {
       echo "<tr><td>". $saved['body'] ."</td><td>". $saved['createdDate'] ."</td></tr>";
    } else {

    }
  }

  function crear_nuevo_usuario() {
    $userInfo = $this->input->post(null,true);

    if( count($userInfo) ) {
      $this->load->model('user_m');
      $saved = $this->user_m->crear_nuevo_usuario($userInfo);
    }

    if ( isset($saved) && $saved ) {
       echo "success";
    }
  }

  function update_tagline() {
    $new_tagline = $this->input->post('message');
    $user_id = $this->session->userdata('id');

    if( isset($new_tagline) && $new_tagline != "" ) {
      $this->load->model('user_m');
      $saved = $this->user_m->update_tagline($user_id, $new_tagline);
    }

    if ( isset($saved) && $saved ) {
      $this->session->set_userdata(array('tagline'=>$new_tagline));
      echo "success";
    }
  }

}
