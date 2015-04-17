<?php

try {
    $dbh = new PDO("sqlite:artists.sqlite");
    echo "Database connection all good";
} catch (PDOException $e){
    echo $e->getMessage();
}
?>

