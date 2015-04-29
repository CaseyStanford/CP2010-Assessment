<?php
include("dbconnect.php");
$debugOn = true;

if ($_REQUEST['submit'] == "Insert Entry"){
    $sql = "INSERT INTO artist_details (name, description, genre, images)
    VALUES ('$_REQUEST[name]', '$_REQUEST[description]', '$_REQUEST[genre]', 'default')";
    echo "<p>Query: " . $sql . "</p>\n<p><strong>";
    if ($dbh->exec($sql))
        echo "Inserted $_REQUEST[name]";
    else
        echo "Not inserted";
}


$dbh = null;
?>