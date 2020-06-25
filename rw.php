<?php
    include('db.php'); 
      
    global $db;
    
    $loin = $_POST['loin'];
    $pssword = $_POST['pssword'];

    $count = mysqli_query($db, "SELECT * FROM `loin` WHERE `loin` = '$loin' aND `pssword` = '$pssword'");

    if (mysqli_num_rows($count) == 0)
    {
        echo 'пользователь не существует';
    }
    else {
        echo "Добро пожаловать";
        include('admin.php');
       
    }
    
        
        
    ?>