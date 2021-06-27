<?php include 'db.php';
session_start();
if(!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}
if ($_POST) {
    # code...
    $query="SELECT * FROM questions";
    $total_questions=mysqli_num_rows(mysqli_query($con, $query));

    $number=$_POST['number'];
    $selected_choice=$_POST['option'];
    $next=$number + 1;
    $query="SELECT * FROM options WHERE question_number=$number AND is_correct=1";
    $result=mysqli_query($con, $query);
    $row=mysqli_fetch_assoc($result);
    $correct_answer=$row['id'];
    $query="SELECT marks FROM questions WHERE question_number=$number";
    $marks=mysqli_num_rows(mysqli_query($con, $query));

    if ($selected_choice==$correct_answer) {
        # code...
        while ($marks!=0) {
            # code...
            $_SESSION['score']++;
            $marks--;
        }
    }
    if ($number==$total_questions) {
        # code...
        header("LOCATION: final.php");
    }else {
        header("LOCATION: question.php?n=".$next);
    }
}
?>