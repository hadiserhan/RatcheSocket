<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:8.tcp.ngrok.io:17401; dbname=chat", "root", "H@di123456");

		return $connect;
	}
}

?>