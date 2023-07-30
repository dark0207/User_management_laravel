<?php

if (!function_exists('profile_picture')) {
	function profile_picture($profile_picture = '') {
		if ($profile_picture == '') {
			return asset('/uploads/profile/avatar.png'); // Todo:
		}

		return asset('/uploads/profile/' . $profile_picture);
	}
}

?>