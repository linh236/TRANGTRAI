<?php

class Layout_Loader{


	protected $layout = 'default';


	function setLayout($_layout =''){
		$this->layout = $_layout;
	}
	function load($data = array()){

		extract($data);

		$layout_path = APP_PATH."/views/layout/{$this->layout}.php";

		if(!file_exists($layout_path)){

			exit("File not found $layout_path");
		}

		require_once $layout_path;


	}

}
