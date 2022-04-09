<?php
$ErrorMsgs = array();
$conn = @new mysqli("localhost", "root", "", "foodonclick");
if ($conn -> connect_errno) //if there is no error connect_errno will be 0, otherwise >0
	$ErrorMsgs[] = "The database server is not available. Error: " . $conn -> connect_errno . "-" . $conn -> connect_error;
?>