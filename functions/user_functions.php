<?php

	//Obtenir les infos du User en lui donnant le cookie
	function getUserInfos($cookie){
		$con = mysqli_connect("localhost","moise","deus","projet");

                if (mysqli_connect_errno()) {
                        echo "failed to connect to mysql: " . mysqli_connect_error();
                        exit();
		}
		$query = mysqli_query($con, 'SELECT * FROM user WHERE session_id="'.$cookie.'"');
		$tab = mysqli_fetch_assoc($query);
		return $tab;
				
	}


?>
