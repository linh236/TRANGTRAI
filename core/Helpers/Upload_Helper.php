<?php
function Upload($file_name){
	if($_FILES["$file_name"]['error'] >0){
		echo "Upload is error";
	}else{
		$path = $_FILES["$file_name"]['tmp_name'];
		$name = $_FILES["$file_name"]['name'];
		$dir = BASE_PATH."/public/upfile/upfile_food/{$name}";
		move_uploaded_file($path,$dir);
		return $name;
	}
}
function Upload_person($file_name){
	if($_FILES["$file_name"]['error'] >0){
		echo "Upload is error";
	}else{
		$path = $_FILES["$file_name"]['tmp_name'];
		$name = $_FILES["$file_name"]['name'];
		$dir = BASE_PATH."/public/upfile/upfile_person/{$name}";
		move_uploaded_file($path,$dir);
		return $name;
	}
}

function upload_xlsx($file_name){
	if($_FILES["$file_name"]['error'] >0){
		echo "Upload is error";
	}else{
		$path = $_FILES["$file_name"]['tmp_name'];
		$name = $_FILES["$file_name"]['name'];
		$dir = BASE_PATH."/public/upfile/upfile_xlsx/{$name}";
		move_uploaded_file($path,$dir);
		return $name;
	}
}
