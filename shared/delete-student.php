<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <?php $student_id = $_GET['student_id']; ?>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="hidden" name="student_id" value="<?php echo $student_id; ?>" />
        <input type="hidden" name="finished" value="true" />
        <input type="submit" id="form_submit_button" style="background: transparent; border: none !important; font-size:0;" />
    </form>

    <?php
    if (!$_GET['finished']) {
        echo "<script>document.getElementById('form_submit_button').click();</script>";
    }

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
</body>

</html>