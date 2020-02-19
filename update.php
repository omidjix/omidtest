<?php
	$sql="UPDATE `posts` SET `title` = 'onvan'  WHERE `posts`.`id` = 40;";
	require 'includes/database_handler.php';
	
	$result=DatabaseHandler::Execute($sql);
	var_dump($result);