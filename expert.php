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
<form method="POST" action="otvet.php">
<h2>Тип 1</h2>
<?php 
    $r = mysqli_query($db,"SELECT * FROM `question_type1`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['question'];
        echo  '<input type="number" placeholder="Ответ" name="expert_answer1">  <br>';
        
    }
?>
<h2>Тип 2</h2>
<?php 
    $r = mysqli_query($db,"SELECT * FROM `question_type2`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['question'];
        echo  '<input type="number" min="0" placeholder="Ответ" name="expert_answer2">   <br>';
    }
?>
<h2>Тип 3</h2>
<?php 
    $r = mysqli_query($db,"SELECT * FROM `question_type3`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['question'];
        echo  '<input type="text" maxlength="30" placeholder="Ответ" name="expert_answer3">  <br>';
    }
?>
<h2>Тип 4</h2>
<?php 
    $r = mysqli_query($db,"SELECT * FROM `question_type4`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['question'];
        echo  '<input type="text" maxlength="255" placeholder="Ответ" name="expert_answer4">  <br>';
    }
?>
<h2>Тип 5</h2>
<?php 
    $r = mysqli_query($db,"SELECT * FROM `question_type5`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['question'];
        echo  '<p><input name="expert_answer5" type="radio" value="1">'. $u['answer'] .'</p> <p><input name="expert_answer5" type="radio" value="2">'. $u['error1'] .'</p>  <br>';
    }
    
?>
<input type="submit" value="отправить">
</form>
    
</body>
</html>