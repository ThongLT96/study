<?php
include 'db-connect.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$phone = $_POST['phone'];
$student_id = $_POST['student_id'];

$query = 'UPDATE "Students" SET'
    . ' "first_name"=' . "'$first_name'" . ','
    . ' "last_name"=' . "'$last_name'" . ','
    . ' "email_address"=' . "'$email_address'" . ','
    . ' "phone"=' . "'$phone'"
    . ' WHERE id=' . $student_id;
$result = pg_query($db_connection, $query);

pg_free_result($result);
pg_close($db_connection);

// redirect
$uri = 'http://' . $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/Study/students.php');
$_SERVER['SCRIPT_NAME'] = '/study/students.php';
?>