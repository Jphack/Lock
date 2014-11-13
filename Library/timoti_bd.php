<?php 

class DB{

	private static  $_driver = DRIVER;
	private static  $_port = PORT;
	private static  $_server= SERVER;
	private static  $_dbname = DBNAME;
	private static  $_user= USER;
	private static  $_password = PASSWORD;
	private static  $_connect;

	private function DB(){}

	public static function getInstance() {
		$dsn = self::$_driver.":host=".self::$_server.":".self::$_port.";dbname=".self::$_dbname;
		
		if (!isset(self:: $_connect)) {
			self::$_connect = new PDO($dsn, self::$_user, self::$_password,array(PDO::ATTR_PERSISTENT=>TRUE));
			self::$_connect->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
		}

		return self::$_connect;
	}

	public function Query($sql) {
		return self::$_connect->query($sql);
	}

	public function Exec($sql) {
		return self::$_connect->exec($sql);
	}

	public function __clone() {
		trigger_error('No podras clonarla.',E_USER_ERROR);
	}
}

?>