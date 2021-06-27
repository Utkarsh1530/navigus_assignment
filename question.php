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
        <div class="container">
            <div class="current">Question <?php echo $number;?> of <?php echo $total_questions; ?></div>
            <p class="question"><?php echo $question['question_text'];?></p>
            <form method="POST" action="process.php">
                <ul class="options">
                    <?php while ($row=mysqli_fetch_assoc($options)) {?>
                    <li><input type="radio" name="option" value="<?php echo $row['id']; ?>"><?php echo $row['options'];?></li>
                    <?php }?>
                </ul>
                <input type="hidden" name="number" value="<?php echo $number;?>">
                <input type="submit" name="submit" value= "Submit">
            </form>
        </div>
    </main>
</body>
</html>