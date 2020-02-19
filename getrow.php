<pre>
<?php
	require 'includes/database_handler.php';

	$sql = "SELECT * FROM `cities` WHERE id = 27";
	$city = DatabaseHandler::GetRow($sql);
	
		echo '<h1> ' . $city['id'] .' '. $city['title'] . '<h1>';
	