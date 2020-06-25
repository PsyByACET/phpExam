<?php 
    include('db.php'); 
    echo "данные сохранены с бд";
    
    mysqli_query($db, "INSERT INTO `users` (`user_id`, `name`, `expert_answer1`, `expert_answer2`, `expert_answer3`, `expert_answer4`, `expert_answer5`) 
    VALUES (NULL, 'nonаme', '$_POST[expert_answer1]', '$_POST[expert_answer2]', '$_POST[expert_answer3]', '$_POST[expert_answer4]', '$_POST[expert_answer5]')");

    echo '<a href="otvet.php">click</a>';
?>
