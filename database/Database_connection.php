<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:host=0.tcp.ngrok.io;port=10651; dbname=chat", "root", "H@di123456");

		return $connect;
	}
}

?>