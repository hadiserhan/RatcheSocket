<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:host=8.tcp.ngrok.io; dbname=chat", "root", "H@di123456");

		return $connect;
	}
}

?>