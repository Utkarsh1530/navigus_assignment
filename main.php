<?php include 'db.php';
$query="SELECT * FROM questions";
$total_questions=mysqli_num_rows(mysqli_query($con, $query));
$query="SELECT "
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
            <h2>Test Your Knowledge</h2>
            <p> This is a multiple choice quiz to test your knowledge. </p>
            <ul>
                <li><strong>Total Number Of Questions : </strong><?php echo $total_questions; ?></li>
                <li><strong>Type : </strong>Objective</li>
                <li><strong>Estimated Time : </strong><?php echo $total_questions*1.5; echo " Minutes"; ?></li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
</body>