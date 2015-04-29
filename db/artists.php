<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Artist Details</title>
    <style type="text/css">
        table {
            table-layout: auto;
        }
    </style>
</head>
<body>
<h2>Current Data</h2>


<!-- Displays a list of records in a table
// TODO Need to add a default image Directory and a Default image
// TODO - 'More details' for artists.
// Create the link when populating the list
// End of week6 lecture - Need to check that.
-->
<?php
$sql = "SELECT * FROM artist_details";

?>
<table id="artist_details">
    <tr><td>Name</td><td>Genre</td><td>Details</td><td>Artist Picture</td></tr>
    <?php
    foreach ($dbh->query($sql) as $row){
    echo "<tr><td>$row[name]</td><td>$row[genre]</td><td><a href=\"artist_details.php?id=$row[artist_id]\">More Details</a> </td><td><img src=\"/res/images/$row[images].jpg\"></td></tr>";
}
    ?>
</table>
<br/>
<br/>

<form id="insert" method="post" action="dbprocessartist.php">
    <fieldset>
        <p><label for="name">Name: </label>
        <input id="name" name="name" type="text"></p>
        <p><label for="description">Description: </label>
        <input id="description" name="description" type="text"></p>
        <p><label for="genre">Genre: </label>
        <input id="genre" name="genre" type="text"></p>
        <p><input type="submit" name="submit" value="Insert Entry"></p>
    </fieldset>
</form>
<?php
$dbh = null;
?>
</body>
</html>

