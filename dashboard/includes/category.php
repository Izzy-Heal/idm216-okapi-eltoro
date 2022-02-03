<?php

// Build Query 
$query = 'SELECT COLUMN_NAME ';
$query .= 'FROM INFORMATION_SCHEMA.COLUMNS ';
$query .= "WHERE TABLE_SCHEMA = 'local_idm216' ";
$query .= "AND TABLE_NAME = 'items'" ;
$column = mysqli_query($db_connection, $query);

while ($col = mysqli_fetch_assoc($column)) {
	echo "<p>". $col['COLUMN_NAME']."</p>";
}

?>