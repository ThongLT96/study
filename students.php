<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="../study/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="../study/stylesheets/bitnami.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    $_SERVER['SCRIPT_NAME'] = '/study/students.php';
    include "shared/navigation-bar.php";
    ?>

    <div class="wrapper">
        <div class="row asciidoctor">
            <table>
                <tr class="">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email address</th>
                    <th>Phone number</th>
                </tr>
                <?php include 'shared/get-student-list.php' ?>
            </table>
            <form action="/study/edit-student.php">
                <input type="submit" class="button" value="Add new student" />
            </form>
        </div>
    </div>

    <?php include 'shared/simple-clock.php' ?>

    <?php include 'shared/footer.html'; ?>
</body>

</html>