<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{
	public function home()
	{
		$pdo = new PDOConnector(
			'mysql', // server
			'root',      // user
			'123456',      // password
			'mysql'   // database
		);

		$pdoConn = $pdo->connect('utf8', []); // charset, options

		// you could now interact with PDO for instance setting attributes etc:
		// $pdoConn->setAttribute($attribute, $value);

		$dbConn = new Mysql($pdoConn);
		$result = $dbConn->fetchColumnMany('SELECT * FROM mysql' , []);
		print_r( $result );
	}

	public function home1()
	{
		$mysqli = new mysqli("mysql", "root", "123456", "mysql");

		$sql = "SELECT * FROM user";

		$result = $mysqli->query($sql);

		$row = $result->fetch_assoc(); // 从结果集中取得一行作为关联数组

		print_r($row);

		/* free result set */

		$result->free();  

		/* close connection */

		$mysqli->close();  

	}
}

