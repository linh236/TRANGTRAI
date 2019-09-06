<?php
  class Home_Controller extends Base_Controller
  {
    function __construct(){
      parent:: __construct();
      $this->model->load("User","user");
      if(isset($_COOKIE["remember"])){
        $_SESSION["id"] = $_COOKIE["remember"];

      }
    }

    function index(){
      if (isset($_SESSION['id'])){
        $this->view->load('home/index');
      }else{
        redirect('home/login');
      }
    }

    function register(){
      $this->view->load('account/register');
    }

    function process_register(){
      $tel = getPostParameter("tel");
      $fullname = getPostParameter("fullname");
      $password = md5(getPostParameter("password"));
      $repassword = md5(getPostParameter("repassword"));
      if($password == $repassword){
        $current_time = get_create_time();
        $password = hash_password($tel,$password);
        $data = [
          "tel"=>$tel,
          "fullname"=>$fullname,
          "password"=>$password,
          "created_at"=>$current_time['created_at'],
          "updated_at"=>$current_time['updated_at'],
        ];
        $result = $this->model->user->checkTel($data);

        if($result != 0){
          $data = [
            "mes"=> "Tel is exists! "
          ];
            $this->view->load('account/register',$data);
          }else{
            $this->model->user->register_model($data);

            redirect('home/login');
          }
      }else{
        $data = [
          "mes"=> "Password is false ! "
        ];
        $this->view->load('account/register',$data);
      }
    }
    function login(){
      if(!isset($_SESSION['id'])){
        $this->view->load('account/login');
      }else{
        redirect('home/index');
      }
    }

    function process_login(){
      $tel = getPostParameter("tel");
      $password = md5(getPostParameter("password"));
      $remember = getPostParameter("remember");
      $data = [
        "tel"=>$tel,
        "password"=> hash_password($tel, $password),
      ];
      $result = $this->model->user->checkUser($data);

      if($result == NULL){
        redirect("home/login");
      }

      $_SESSION['id'] = $result;

      if($remember == 1){
        setcookie("remember", $result, time() + 3600);
      }

      redirect('home/index');

    }

    function logout(){
      session_destroy();
      setcookie("remember","", time() - 3600);
      redirect('home/login');
    }


  }


?>
