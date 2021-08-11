<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:host=4.tcp.ngrok.io;port=18484; dbname=chat", "root", "H@di123456");

		return $connect;
	}
}

?>