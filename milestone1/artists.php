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
<?php
$sql = "SELECT * FROM artist_details";

foreach ($dbh->query($sql) as $row){
?>
<table id="artist_details">
    <?php
    echo "<tr><td>$row[name]</td><td>$row[description]</td><td>$row[genre]</td><td>$row[images]</td></tr>";
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





</body>
</html>

