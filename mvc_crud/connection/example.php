<?PHP
	// Se incluye la clase db.
	include('db.class.php');
	
	// Necesitamos 2 objetos config con todos los parametros.
	$config1 = new config("hostname", "username", "password", "database", "prefix", "connector"); //type in your data here…
	$config2 = new config("hostname", "username", "password", "database", "prefix", "connector"); //type in your data here…

	// Con los respectivos objetos config configuramos 2 objetos db para acceder a las respectivas bases de datos.
	$db1 = new db($config1);
	$db2 = new db($config2);

	// No escribimos abrir conección en el principio del ejemplo porque lo hacemos cuando lo necesitamos en su justo momento al correc un query.
	// Así por seguridad y rendimiento la conexion no esta abierta permanentemente.
	

	// Si los detalles de configuracion son correctos, estamos conectados a las bases de datos, podemos probar las conexiones antes de correr consultas queries.
	$are_we_online_1 = $db1->pingServer();
	$are_we_online_2 = $db2->pingServer();

	// Las variables $are_we_online deberían retornar true (o 1) si estamos conectados.
	echo "Are we online width 1: " . $are_we_online_1; // prints 0 or 1.
	echo "Are we online width 2: " . $are_we_online_2; // prints 0 or 1.

	// Corremos un query.
	$sql1 = $db1->query("SELECT * FROM {table}");
	$sql2 = $db2->query("SELECT * FROM {table}");

	// La variable $sql almacenara la data retornada de la base de datos, podemos trabajar con esta data.
	
	// Tiene registros?
	
	$hasRows1 = $db1->hasRows($sql1);
	$hasRows2 = $db2->hasRows($sql2);
	echo "Does it have rows: " . $hasRows1; // prints 0 or 1 (true or false).
	echo "Does it have rows: " . $hasRows2; // prints 0 or 1 (true or false).
	
	// Cuantos registros tiene.
	$countRows1 = $db1->countRows($sql1);
	$countRows2 = $db2->countRows($sql2);
	echo "How many rows 1: " . $countRows1; // returns the number of rows. 
	echo "How many rows 2: " . $countRows2; // returns the number of rows. 
	
	// Podemos obtener datos atraves de la funcion fetch_assoc.
	$result1 = $db1->fetchAssoc($sql1);
	$result2 = $db2->fetchAssoc($sql2);

	// Podemos obtener datos atraves de la funcion fetch_array.
	$result1 = $db1->fetchArray($sql1);
	$result2 = $db2->fetchArray($sql2);

	 Podemos imprimir la salida print del ultimo quiery:
	echo $db1->lastQuery();
	echo $db2->lastQuery();

	// No necesitamos cerrar la conexion aqui, porque la cerramos despues de que cada query es ejecutado dentro de las clases.
?>

