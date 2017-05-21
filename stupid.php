<?php
	include($_GET['page'].'.php');
	print '<a href="index.html?page=welcome">Welcome</a>';


	eval($_GET['stuff']);

	$conn = new mysqli("blah", "blub", "fish", "chen");
	$result = $conn->query("SELECT * FROM users WHERE pw = '" . $_GET['pw'] . "'");
	

?>
