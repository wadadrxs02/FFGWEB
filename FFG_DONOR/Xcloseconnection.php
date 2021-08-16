<?php
// Check for error
if ($connection->query($sql) == false) {
echo "ERROR: Could not able to execute $sql . " . $connection->error;
}
// Close connection
$connection->close();
?>