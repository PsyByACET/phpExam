<?php 
    include('db.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    if(mysqli_query($db,"SELECT answer FROM `question_type1`") == mysqli_query($db,"SELECT expert_answer1 FROM `sessions`")){
        echo 'ee';
    }
    else {
        echo 'ne ee';
    }

?>
</body>
</html>