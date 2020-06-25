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
    
    <form method="POST" action="new.php">
        <h2>Тип 1</h2>
        <input type="text" placeholder="Вопрос" name="question1">
        <input type="number" placeholder="Ответ" name="answer1">  
        <hr>

        <h2>Тип 2</h2>
        <input type="text" placeholder="Вопрос" name="question2">
        <input type="number" min="0" placeholder="Ответ" name="answer2">  
        <hr>

        <h2>Тип 3</h2>
        <input type="text" placeholder="Вопрос" name="question3">
        <input type="text" maxlength="30" placeholder="Ответ" name="answer3">  
        <hr>

        <h2>Тип 4</h2>
        <input type="text" placeholder="Вопрос" name="question44">
        <input type="text" placeholder="Ответ" name="answer44">  
        <hr>
        
        <h2>Тип 5</h2>
        <input type="text" placeholder="Вопрос" name="question5">
        <p><input name="answer5" type="radio" value="1">1</p> 
        <input type="text" placeholder="n" name="var1">
        <p><input name="answer5" type="radio" value="2">2</p>
        <input type="text" placeholder="n" name="var2">
        
        
        <hr>
        <h2>Тип 6</h2>
        <input type="text" placeholder="Вопрос" name="question4">
        <p><input type="checkbox" name="answer6" value="1417"> 1417</p>
        <p><input type="checkbox" name="answer6" value="1680"> 1680</p>
        <p><input type="checkbox" name="answer6" value="1883"> 1883</p>
        <p><input type="checkbox" name="answer6" value="1934"> 1934</p> 
        <hr>
        
        <input type="submit" value="отправить">
        
    </form>
</body>
</html>