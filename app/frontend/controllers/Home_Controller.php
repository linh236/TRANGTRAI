<?php
  class Home_Controller extends Base_Controller
  {
    function __construct(){
      parent:: __construct();
    }
    function index(){
      $this->view->load('login/login');
    }
  }


?>
