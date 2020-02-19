<?php
	$sql="UPDATE `posts` SET `title` = 'onvan', `body` = '1 matn khob';";
	require 'includes/database_handler.php';
	
	DatabaseHandler::Execute($sql);