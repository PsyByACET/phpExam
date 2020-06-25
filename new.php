<?php 
    include('db.php'); 
    print_r($_POST);
    //mysqli_query($db, "INSERT INTO `question_type1` (`question_type1_id`, `question`, `answer`) VALUES (NULL, '$_POST[question1]', '$_POST[answer1]')");
    //mysqli_query($db, "INSERT INTO `question_type2` (`question_type2_id`, `question`, `answer`) VALUES (NULL, '$_POST[question2]', '$_POST[answer2]')");
    //mysqli_query($db, "INSERT INTO `question_type3` (`question_type3_id`, `question`, `answer`) VALUES (NULL, '$_POST[question3]', '$_POST[answer3]')");
    //mysqli_query($db, "INSERT INTO `question_type4` (`question_type4_id`, `question`, `answer`) VALUES (NULL, '$_POST[question44]', '$_POST[answer44]')");

    //if($_POST['answer5'] == 1) {
       // mysqli_query($db, "INSERT INTO `question_type5` (`question_type5_id`, `question`, `answer`, `error1`) VALUES (NULL, '$_POST[question5]', '$_POST[var1]', '$_POST[var2]')");
    //}else{
        //mysqli_query($db, "INSERT INTO `question_type5` (`question_type5_id`, `question`, `answer`, `error1`) VALUES (NULL, '$_POST[question5]', '$_POST[var2]', '$_POST[var1]')");

    //}
    
    echo '<a href="expert.php">click</a>';
?>
