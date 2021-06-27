<?php include 'db.php';
if(isset($_POST['submit'])){
    $question_number=$_POST['question_number'];
    $question_text=$_POST['question_text'];
    $marks=$_POST['marks'];
    $correct_choice=$_POST['correct_choice'];
    $choice=array();
    $choice[1]=$_POST['choice1'];
    $choice[2]=$_POST['choice2'];
    $choice[3]=$_POST['choice3'];
    $choice[4]=$_POST['choice4'];

    $query="INSERT INTO questions (";
    $query.="question_number,question_text,marks)";
    $query.="VALUES (";
    $query.="'{$question_number}','{$question_text}',{$marks}";
    $query.=")";

    $result=mysqli_query($con,$query);

    if($result){
        foreach ($choice as $option => $value) {
            # code...
            if ($value!="") {
                # code...
                if($correct_choice==$option){
                    $is_correct=1;
                }else{
                    $is_correct=0;
                }
                $query="INSERT INTO options (question_number, is_correct, options) VALUES('{$question_number}','{$is_correct}','{$value}')";
                $insert_row=mysqli_query($con, $query);

                if($insert_row){
                    continue;
                }else{
                    die("Options could not be added");
                }
            }
        }
        $message="Question added successfully";
    }
}
$query="SELECT * FROM questions";
$questions=mysqli_query($con,$query);
$total=mysqli_num_rows($questions);
$next=$total+1;
?>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <p>Quiz</p>
        </div>
    </header>
    <main>
        <div class="container"></div>
            <h2>Add A Question</h2>
            <?php if (isset($message)) {
                # code...
                echo "<h4>".$message."</h4>";
            }?>
            <form method="POST" action="add.php">
                <p>
                    <label>Question Number :</label>
                    <input type="number" name="question_number" value="<?php echo $next; ?>">
                </p>
                <p>
                    <label>Question Text :</label>
                    <input type="text" name="question_text">
                </p>
                <p>
                    <label>Choice 1 :</label>
                    <input type="text" name="choice1" >
                </p>
                <p>
                    <label>Choice 2 :</label>
                    <input type="text" name="choice2">
                </p>
                <p>
                    <label>Choice 3 :</label>
                    <input type="text" name="choice3" >
                </p>
                <p>
                    <label>Choice 4 :</label>
                    <input type="text" name="choice4">
                </p>
                <p>
                    <label>Correct Option Number</label>
                    <input type="number" name="correct_choice">
                </p>
                <p>
                    <label>Score</label>
                    <input type="number" name="marks">
                </p>
                <input type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </main>
</body>
</html>