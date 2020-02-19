<?php
	$sql="INSERT INTO `posts` (`id`, `title`, `body`, `created_at`) VALUES (NULL, 'titael', 'bodaus\\\r\n', current_timestamp())";
	require 'includes/database_handler.php';
	
	DatabaseHandler::Execute($sql);