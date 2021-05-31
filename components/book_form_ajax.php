<?php

include(__DIR__ . '/../database/connect.php');
$book_title = $_POST['title'];
$book_author = $_POST['author'];
$book_pages = $_POST['pages'];

$mysql = "INSERT INTO books (title, author, pages)
VALUES ( '{$book_title}', '{$book_author}', '{$book_pages}' )";

if ($conn->query($mysql) === TRUE) 
{
	return [
		"message" => "post was updated successfully"
	];
} else {
	return ["message" => "Error: {$conn->error}"];
}

$conn->close();

?>
