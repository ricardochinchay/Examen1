<?php

class login extends CI_Controller {

    function index() {
        if( $this->session->userdata('isLoggedIn') ) {
            redirect('/principal/mostrar_principal');
        } else {
            $this->show_login(false);
        }
    }

    function login_user() {
        // Crea una instancia del modelo user_m
        $this->load->model('user_m');

        // Guardo el dni y el password enviado por POST
        $dni  = $this->input->post('dni');
        $pass = $this->input->post('password');

        //Me aseguro que el dni, el password existan y sea valido el usuario
        if( $dni && $pass && $this->user_m->validate_user($dni,$pass) ) {
            // If the user is valid, redirect to the main view
            redirect('/principal/mostrar_principal');
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }

    function show_login( $show_error = false ) {
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('login',$data);
    }

    function logout_user() {
      $this->session->sess_destroy();
      $this->index();
    }

    function showphpinfo() {
        echo phpinfo();
    }
    
}
