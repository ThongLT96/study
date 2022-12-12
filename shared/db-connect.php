<?php
$db_password = '897410';

$db_connection = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=$db_password")
    or die("Unable to connect: ". pg_last_error());
?>