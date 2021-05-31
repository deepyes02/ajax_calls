<?php
//initialize the connection
require(__DIR__ . '/connect.php');

$mysql = "CREATE TABLE IF NOT EXISTS books (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL UNIQUE,
	author VARCHAR(100) NOT NULL,
	pages SMALLINT UNSIGNED NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP	
	)";

if($conn->query($mysql) === TRUE){
 echo "<span class='blips'>Table books has been created</span>";
} else {
	echo $conn->error;
}

//close the connection after you are done
$conn->close();