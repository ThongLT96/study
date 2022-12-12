<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="stylesheets/bitnami.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    $_SERVER['SCRIPT_NAME'] = '/study/students.php';
    include "shared/navigation-bar.php";
    ?>

    <?php // check if this form will do edit or add new student
    $is_update_form = false;
    $form_purpose = "Add new student";

    if (isset($_GET['student_id'])) {
        $is_update_form = true;
        $form_purpose = "Edit student";

        include 'shared/db-connect.php';
        $student_id = $_GET['student_id'];
        $query = 'SELECT * FROM "Students" WHERE "id"=' . $student_id;
        $result = pg_query($db_connection, $query);
        $student = pg_fetch_row($result);

        pg_free_result($result);
        pg_close($db_connection);
    } else {
        $student = array('', '', '', '', '');
    }
    ?>

    <div class="wrapper">
        <div class="asciidoctor row">
            <ul class="separate no-bullet">
                <form class="" action="<?php echo $is_update_form ? 'shared/update-student.php' : 'shared/insert-student.php'; ?>" method="POST">
                    <h3><?php echo $form_purpose; ?></h3>
                    <li class="">First name</li>
                    <li class=""><input type="text" name="first_name" value="<?php echo $student[1]; ?>" /></li>
                    <li class="">Last name</li>
                    <li class=""><input type="text" name="last_name" value="<?php echo $student[2]; ?>" /></li>
                    <li class="">Email address</li>
                    <li class=""><input type="text" name="email_address" value="<?php echo $student[3]; ?>" /></li>
                    <li class="">Phone</li>
                    <li class=""><input type="text" name="phone" value="<?php echo $student[4]; ?>" /></li>
                    <li class=""><input type="hidden" name="student_id" value="<?php echo $student[0]; ?>" /><br></li>
                    <li class=""><input class="button" type="submit" value="<?php echo $form_purpose; ?>" /></li>
                </form>
            </ul>
        </div>
    </div>

    <?php include 'shared/simple-clock.php' ?>

    <?php include 'shared/footer.html'; ?>
</body>

</html>