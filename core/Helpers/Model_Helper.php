<?php

	// hàm mã hóa password, ko lưu trực tiếp password vào db
	function hash_password($tel, $password) {
		return sha1($tel . $password);
	}

	// hàm trả ra mảng created khi insert bản ghi mới vào db
	function get_create_time() {
		$current_time = get_current_time();
		return [
			'created_at' => $current_time,
			'updated_at' => $current_time
		];
	}

	// hàm trả ra mảng updated khi insert bản ghi mới vào db
	function get_update_time() {
		$current_time = get_current_time();
		return [
			'updated_at' => $current_time
		];
	}

	