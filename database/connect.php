<?php

$conn = @new mysqli('localhost', 'root', 'Apple4dinnerXx!@#', 'rawAjax');

if ($conn->connect_error !== null) {
	echo "<div class='notification_status'>";
	echo "<span><strong>SQL:</strong> {$conn->connect_error}</span>";
	echo "</div>";
	die();
	return;
}
//connection is ready;
echo "<div class='notification_status'>";
echo "<span>SQL is ready</span>";
echo "</div>";
// require this file where connection is needed, then close the connection manually when work is done.
