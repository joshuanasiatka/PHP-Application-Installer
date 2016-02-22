<?php
class Configure {
	function set_error($error) {
		define('ERROR',$error);
	}

	function get_error() {
		return ERROR;
	}

	function loadStep($step) {
		if ($step == 0) {
			require_once( ABSPATH . 'admin/intro.php' );
		} elseif ($step == 1) {
			require_once( ABSPATH . 'admin/step1.php' );
		} elseif ($step == 2) {
			require_once( ABSPATH . 'admin/step2.php' );
		} elseif ($step == 3) {
			require_once( ABSPATH . 'admin/step3.php' );
		} 
	}

	function GetSelfScript() {
		return htmlentities($_SERVER['PHP_SELF']);
	}

	protected function dbconnect() {
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			printf("<p><a href='javascript:void(0)' onclick='window.history.go(-1)'>Try Again</a></p>");
			return false;
		} else {
			printf("<h3>Success!</h3>
				<p>You have successfully made a connection to the database. Almost done.</p><br>
				<p><a href='?step=3'><button class='btn btn-primary btn-md'>Install</button></a></p>");
			return $mysqli;
		}
    }

    public function test() {
		$db = $this->dbconnect();
	}

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	function buildConfig() {
		$config = file_get_contents( ABSPATH . 'sd-config-sample.php');
		$newfile = str_replace('database_name_here', DB_NAME, $config);
		$newfile = str_replace('username_here', DB_USER, $newfile);
		$newfile = str_replace('password_here', DB_PASS, $newfile);
		$newfile = str_replace('localhost', DB_HOST, $newfile);
		$authkey = md5(time());
		$randkey = md5(time()+50);
		$newfile = str_replace('AUTHKEY_PHRASE', $authkey, $newfile);
		$newfile = str_replace('RANDKEY_PHRASE', $randkey, $newfile);
		file_put_contents( ABSPATH . 'sd-config.php', $newfile);
		printf("<h3>Configuration Installed!</h3>
				<p>You have successfully setup Bitcraft Service Desk.</p><br>
				<p><a href='/'><button class='btn btn-primary btn-md'>Proceed</button></a></p>");
	}
}