<?php
  class Home_Controller extends Base_Controller
  {
    function __construct(){
      parent:: __construct();
    }

    function index(){
      $this->view->load('home/index');
    }

    function register(){
      $this->view->load('account/register');
    }

    function login(){
      $this->view->load('account/login');
    }

    function logout(){
      session_destroy();
    }


  }


?>
