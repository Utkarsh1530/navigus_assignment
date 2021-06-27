<?php include 'db.php';
session_start();
$number=$_GET['n'];
$query="SELECT * FROM questions WHERE question_number=$number";
$result=mysqli_query($con, $query);
$question=mysqli_fetch_assoc($result);
$query="SELECT * FROM options where question_number=$number";
$options=mysqli_query($con, $query);
$query="SELECT * FROM questions";
$total_questions=mysqli_num_rows(mysqli_query($con, $query));
$next=$number+1;

?>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <p>Quiz</p>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question <?php echo $number;?> of <?php echo $total_questions; ?></div>
            <p class="question"><?php echo $question['question_text'];?></p>
            <form action="delete.php" method="POST">
                <ul class="options">
                    <?php while ($row=mysqli_fetch_assoc($options)) {?>
                    <li><input type="radio" name="option" value="<?php echo $row['id']; ?>"><?php echo $row['options'];?>"</li>
                    <?php }?>
                </ul>
                <button type="submit" name="delete_ques" class="button" >Delete Question</button>
            </form>
            <form action="delete.php" method="POST">
                <button type="submit" name="next" class="button">Next Question</button>
            </form>
        </div>
    </main>
</body>
</html>