<?php
/**
 * drop the database function
 * enable the drop table function at the end to drop the database
 */
function drop_table()
{
	//initialize the connection
	require(__DIR__ . '/connect.php');

	$mysql = "DROP TABLE IF EXISTS books";

	if ($conn->query($mysql) === TRUE) {
		echo "<span class='blips'>Table has been dropped</span>";
	} else {
		echo $conn->error;
	}

	//close the connection after you are done
	$conn->close();
}
// drop_table();
