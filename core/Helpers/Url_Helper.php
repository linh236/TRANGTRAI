<?php

function base_url($uri = '') {
	$uri = str_replace('?', '&', $uri);
	$uri_array = explode('/', $uri);
	$module = $uri_array[0];
	$action = $uri_array[1];

	if ($module && $action) {
		return BASE_URL . "/?module={$module}&action={$action}";
	}
	return BASE_URL;
}

	/*
	*	Hàm chuyển hướng, tham số truyền vào giống hàm base_url
	*/
	function redirect($uri) {
		$url = base_url($uri);
		header("location: $url");
		exit;
	}


	function load_css($name){

		return BASE_URL."/vendor/css/{$name}";

	}
	function load_jquery($name){

		return BASE_URL."/vendor/jquery/{$name}";

	}
	function load_img($name){

		return BASE_URL."/vendor/images/{$name}";

	}
	function load_javascript($name){

		return BASE_URL."/vendor/javascript/{$name}";

	}

?>
