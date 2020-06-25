<?php include('db.php'); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <h1>Вход для администатора</h1>
    <form method="POST" action="rw.php">
        <input type="text" placeholder="Логин" name="loin">
        <input type="text" placeholder="пароль" name="pssword">
        <hr>
        <input type="submit" value="отправить">
    </form>
    
    </div>
</body>
</html>