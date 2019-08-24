<?php
  class User_Model extends Base_Model{

    protected $table = 'users';

    function check_user($data = []){
      $query = "select id from {$this->table} where code_st =:code_st";

      $sth = $this->db->prepare($query);

  		$sth->execute([
        ':code_st'=> $data['code_st']
      ]);

  		$data =$sth->fetch(PDO::FETCH_ASSOC);

    	if($data == null){
        return 0;
      }
      return $data;
    }

    function enter_code($data){

      $query = "select password from {$this->table} where id =:id and active_pass =:active_pass";

      $sth = $this->db->prepare($query);

  		$sth->execute([
        ':id'=> $data['id'],
        'active_pass'=> 0
      ]);

  		$data =$sth->fetch(PDO::FETCH_ASSOC);

      return $data;

    }

    function check_pass($data = []){
      $query = "select id from {$this->table} where password =:password and id=:id";

      $sth = $this->db->prepare($query);

      $sth->execute([
        ':password'=> $data['password'],
        ':id'=> $data['user_id']
      ]);

      $data =$sth->fetchAll(PDO::FETCH_ASSOC);

      if($data == null){
        return 0;
      }
      return 1;
    }
  }
 ?>
