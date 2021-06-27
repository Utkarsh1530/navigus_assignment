
<<!-- ?php
session_start();
if(isset($_POST['email']))
{
    extract($_POST);
    include 'db.php';
    $sql=mysqli_query($con,"SELECT * FROM signup where email='$email' AND password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"]=$row['password'];
        if('teacher'==$row['t_or_s']){
            header("Location: techindex.php");
        }

        else if('student'==$row['t_or_s'){
            header("Location: index.php");
        }
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>-->


<?php include 'db.php';
session_start();
$pass=$_POST['password'];
$t_or_s=$_POST['t_or_s'];
$email=$_POST['email'];

$query="SELECT * FROM signup WHERE email='$email' AND password='$pass' AND t_or_s='$t_or_s'";

$res= mysqli_query($con, $query);
$num= mysqli_num_rows($res);

if($num=1)
{
    if($t_or_s=="teacher"){
        header("Location: techindex.php");
    }
    if($t_or_s=="student"){
        header("Location: index.php");
    }
}
?>