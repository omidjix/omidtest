<pre><?php
	$sql="SELECT * FROM `posts`";
	require 'includes/database_handler.php';

	$post=DatabaseHandler::GetAll($sql);
	var_dump($post);