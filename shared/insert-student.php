<?php
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email_address = trim($_POST['email_address']);
$phone = trim($_POST['phone']);

if ($first_name != '' && $last_name != '' && $email_address != '') {
    include 'db-connect.php';

    $query = 'INSERT INTO "Students"("first_name","last_name","email_address","phone") VALUES (' . "
    '$first_name',
    '$last_name',
    '$email_address',
    '$phone'
    )";

    $result = pg_query($db_connection, $query);

    pg_free_result($result);
    pg_close($db_connection);
} else {
    // invalid input
}

// redirect
$uri = 'http://' . $_SERVER['HTTP_HOST'];
$_SERVER['SCRIPT_NAME'] = '/study/students.php';
header('Location: ' . $uri . $_SERVER['SCRIPT_NAME']);
exit;
