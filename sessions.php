<?php
require 'db.php';

function delete(){
    
};

$get_data = mysqli_query($db, "SELECT * FROM `sessions`");
if (mysqli_num_rows($get_data) > 0) {
    while ($row = mysqli_fetch_assoc($get_data)) {

        echo '
            <table>
            <tr>
                <th scope="row">' . $row['session_id'] . '</th>
                <td> <a href="#">' . $row['link'] . '</a> </td>
                <td>' . $row['status'] . '</td>
                <td>
                    <a href="archive_s.php?session_id='.$row['session_id'].'">Архивировать</a>
                    <a href="delete_s.php?session_id='.$row['session_id'].'">Удалить</a>
                </td>
            </tr>
            </table>
            ';
    }
} else {
    echo "<h2>Ничего нет</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="admin.php">Create new session</a>
</body>
</html>