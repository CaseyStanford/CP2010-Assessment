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

        }
    </style>
</head>
<body>


<?php
$id = $_GET["id"];
$sql = "SELECT * FROM artist_details WHERE artist_id=". $id;

?>
<table id="artist_details">
    <tr><td>Name</td><td>Description</td><td>Genre</td><td>Image</td></tr>
    <?php
    foreach ($dbh->query($sql) as $row){
    echo "<tr><td>$row[name]</td><td>$row[description]</td><td>$row[genre]</td><td><img src=\"/res/images/$row[images].jpg\"></td></tr>";
    }
    ?>
</table>

<?php
$dbh = null;
?>
</body>
