<?php
  class Admin_Controller extends Base_Controller {
    function __construct(){
      parent:: __construct();
      $this->layout->setLayout('layout_admin');

    }

    function index(){
    
    }

    function logout(){
      session_destroy();
    }



  }

 ?>
