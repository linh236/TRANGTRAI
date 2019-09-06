<?php

class Core_Model {

	protected $db = null;

	function __construct(){

		$this->connectDB();
	}

	function connectDB(){

		if(!empty($this->db)){
			return;
		}

		$db_config_path = BASE_PATH.'/config/database.php';
		if(!file_exists($db_config_path)){

			exit("File database not found $db_config_path");

		}

		$config = require $db_config_path;

		$host = $config['host'];
		$user = $config['user'];
		$password = $config['password'];
		$dbname = $config['dbname'];

		try {
			$this->db = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
			$this->db->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
			$this->db->exec("set names utf8");

			
		} catch (Exception $e) {
			exit("Conncettion fail: ". $e->getMessage());
			
		}



	}
}