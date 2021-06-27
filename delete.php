<?php include 'db.php';
if (isset($_POST['delete_ques'])) {
    # code...
    $number=$_GET['n'];
    $next=$number+1;
    $query="DELETE FROM questions WHERE question_number=$number";
    $res=mysqli_query($query);
    $qury="DELETE FROM options WHERE question_number=$number";
    $result=mysqli_query($con,$qury);
    if($res && $result){
        echo "Question Deleted Successfully";
    }
    header("Location: modify.php?n=".$next);
}
if(isset($_POST['next'])){
    $num=$_GET['n'];
    $nxt=$num+1;
    header("Location: modify.php?n=".$nxt);
}
?>