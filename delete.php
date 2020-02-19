<?php
	$sql="DELETE FROM `posts` WHERE `posts`.`id` = 5";
	require 'includes/database_handler.php';
	
	DatabaseHandler::Execute($sql);