<?php
include("dbconnect.php");
$debugOn = true;

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

if ($_REQUEST['submit'] == "Insert Entry"){
    $sql = "INSERT INTO artist_details (name, description, genre, images)
    VALUES ('$_REQUEST[name]', '$_REQUEST[description]', '$_REQUEST[genre]', 'default')";
    echo "<p>Query: " . $sql . "</p>\n<p><strong>";
    if ($dbh->exec($sql))
        echo "Inserted $_REQUEST[name]";
    else
        echo "Not inserted";
}
else if ($_REQUEST['submit'] == "Delete Entry"){
	$sql = "DELETE FROM artist_details WHERE artist_id = '$_REQUEST[artist_id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry"){
	$sql = "UPDATE artist_details SET name = '$_REQUEST[name]', genre = '$_REQUEST[genre]', images = 'default' WHERE artist_id = '$_REQUEST[artist_id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[name]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br/>\n";
}
echo "</strong></p>\n";
echo "<a href=artists.php >Return to Artists Page</a>";

$dbh = null;
?>