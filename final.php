<?php
session_start();
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
            <h2>Your Result</h2>
            <p>Congratulations! You have completed this test.</p>
            <p>Your <strong>Score</strong> is <?php echo $_SESSION['score'];?></p>
            <?php unset ($_SESSION['score']);?>
        </div>
    </main>
</body>
</html>