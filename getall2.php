<pre>
<?php
	require 'includes/database_handler.php';

	$sql = "SELECT * FROM `cities`";
	$cities = DatabaseHandler::GetAll($sql);
	
	foreach($cities as $city):
	
		echo '<p> ' . $city['id'] .' '. $city['title'] . '<p>';
		
	endforeach;