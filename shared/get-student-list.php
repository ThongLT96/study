<?php
include 'db-connect.php';

$query = 'SELECT "id", "last_name" || \' \' || "first_name" AS "full_name", "email_address", "phone" AS "phone_number" FROM "Students" ORDER BY "id"';
$result = pg_query($db_connection, $query);

while ($row = pg_fetch_row($result)) {
    echo '<tr>';
    echo '<td>' . $row[0] . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '<td>' . $row[3] . '</td>';
    echo '<td>';
    echo '<a href="/study/edit-student.php?student_id=' . $row[0] . '"><button>Edit</button></a>&nbsp;';
    echo '<a href="/study/shared/delete-student.php?student_id=' . $row[0] . '"><button>Delete</button></a>';
    echo '</td></tr>';
}

pg_free_result($result);
pg_close();
?>