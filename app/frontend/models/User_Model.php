<?php
  class User_Model extends Base_Model{

    protected $table = 'users';

    function register_model($data = []){

      $query = "insert into {$this->table}(tel, fullname, password, avata, age, created_at, updated_at, admin, hide) values(:tel, :fullname, :password, :avata, :age, :created_at, :updated_at, :admin, :hide)";

  		$sth = $this->db->prepare($query);

  		$sth->execute([
  			':tel'=>$data['tel'],
  			':fullname'=>$data['fullname'],
        ':password'=>$data['password'],
        ':created_at'=>$data['created_at'],
        ':updated_at'=>$data['updated_at'],
        ':hide'=>0,
        ':avata'=>"avata.png",
        ':age'=>"",
        ':admin'=>0,
  		]);

      $sth->closeCursor();
    }

    function checkUser($data = []){

      $query = "select id from {$this->table} where tel = :tel and password = :password";

      $sth = $this->db->prepare($query);

      $sth->execute([
        ":tel"=>$data["tel"],
        ":password"=>$data["password"],
      ]);

      $data =$sth->fetch(PDO::FETCH_ASSOC);

      $sth->closeCursor();

      return $data["id"];
    }
  }
 ?>
