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

    <div class="wrapper">
        <div class="asciidoctor row">
            <ul class="separate no-bullet">
                <form class="" name="insert" action="shared/insert-student.php" method="POST">
                    <h3>Add new student</h3>
                    <li class="">First name</li>
                    <li class=""><input type="text" name="first_name" /></li>
                    <li class="">Last name</li>
                    <li class=""><input type="text" name="last_name" /></li>
                    <li class="">Email address</li>
                    <li class=""><input type="text" name="email_address" /></li>
                    <li class="">Phone</li>
                    <li class=""><input type="text" name="phone" /></li>
                    <br>
                    <li class=""><input class="button button-stay-away" type="submit" value="Add student" /></li>
                </form>
            </ul>
        </div>
    </div>

    <?php include 'shared/simple-clock.php' ?>

    <?php include 'shared/footer.html'; ?>
</body>

</html>