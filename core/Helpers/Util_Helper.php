<?php

function get_current_time($format = 'Y-m-d H:i:s') {
		date_default_timezone_set("Asia/Bangkok");
		return date($format);
	}
