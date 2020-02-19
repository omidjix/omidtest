<?php
	$sql="DELETE FROM `posts`";
	require 'includes/database_handler.php';
	
	DatabaseHandler::Execute($sql);