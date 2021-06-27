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
    <div class="menu">
       <a href="add.php" class="button">Prepare Quiz</a>
        <form action="modify.php?n=1" method="POST">
            <button type="submit" class="button" name="delete" >Delete Question</button>
        </form>
    </div>
    </main>
</body>
</html>