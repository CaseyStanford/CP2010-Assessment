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


<!-- Displays a list of records in a table -->
<?php
$sql = "SELECT * FROM artist_details";
?>
<table id="artist_details">
    <tr><td>Name</td><td>Genre</td><td>Details</td><td>Artist Picture</td></tr>
    <?php
    foreach ($dbh->query($sql) as $row){
    ?>
    <form id="deleteForm" name="deleteForm" method="post" action="dbprocessartist.php">
    <?php
    echo "<tr><td><input type='text' name='name' value='$row[name]' /></td><td><input type='text' name='genre' value='$row[genre]' /></td><td><a href=\"artist_details.php?id=$row[artist_id]\">More Details</a> </td><td><img src=\"/res/images/$row[images].jpg\"></td><p>\n</p>";
    echo "<input type='hidden' name='artist_id' value='$row[artist_id]' />";
        
    ?>
        <td><input type="submit" name="submit" value="Update Entry" />
        <input type="submit" name="submit" value="Delete Entry" class="deleteButton" /></td></tr>
    </form>
    <?php
}
?>
</table>
<br/>
<br/>

<form id="insert" method="post" action="dbprocessartist.php">
    <fieldset>
        <p><label for="name">Name: </label>
        <input id="name" name="name" type="text"></p>
        <p><label for="genre">Genre: </label>
        <input id="genre" name="genre" type="text"></p>
        <p><label for="description">Description: </label>
        <input id="description" name="description" type="text"></p>
        <p><input type="submit" name="submit" value="Insert Entry"></p>
    </fieldset>
</form>
<?php
$dbh = null;
?>
</body>
</html>
