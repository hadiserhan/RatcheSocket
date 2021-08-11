<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:host=6.tcp.ngrok.io;port=14265; dbname=chat", "root", "H@di123456");

		return $connect;
	}
}

?>