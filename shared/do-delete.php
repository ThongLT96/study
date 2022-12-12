
<?php
include 'db-connect.php';
$student_id = $_GET['student_id'];
$query = 'DELETE FROM "Students" WHERE "id"=' . "'$student_id'";
$result = pg_query($db_connection, $query);

pg_free_result($result);
pg_close($db_connection);

// redirect
$uri = 'http://' . $_SERVER['HTTP_HOST'];
$_SERVER['SCRIPT_NAME'] = '/study/students.php';
header('Location: ' . $uri . $_SERVER['SCRIPT_NAME']);
?>