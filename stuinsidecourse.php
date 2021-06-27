<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
    <header>

        <div id="menu" class="fas fa-bars"></div>

        <a href="#" class=logo><i class="fas fa-user-graduate"></i>Learn With Utkarsh</a>

        <nav class="navbar">
            <ul>
                <li><a href="stuindex.html">home</a></li>
                <li><a class="active" href="stuindex.html#course">course</a></li>
     
            </ul>
        </nav>

        <div id="login" class="fas fa-user-circle"></div>

    </header>

    <div class="login-form">
       
        
        <form action="loginProcess.php" method="post">
            <h3>login</h3>
            <input type="email" name="email" id="email" placeholder="E-mail" class="box">
            <input type="password" name="password" id="password" placeholder="Password" class="box">
            <input type="text" name="t_or_s" id="t_or_s" placeholder="Teacher/Student" class="box">

            <p>do not have an account? <a href="#signup">click here</a></p>
            <input type="submit" value="login" class="btn">
            <i class="fas fa-times"></i>
        </form>
    </div>

    <div class="signup-form">
        
        <form action="index.php" method="post">
            <h3>Sign up</h3>
            <input type="text" name="name" id="name" placeholder="Name" class="box">
            <input type="phone" name="phone" id="phone" placeholder="Mobile Number" class="box">
            <input type="text" name="t_or_s" id="t_or_s" placeholder="Teacher/Student" class="box">
            <input type="email" name="email" id="email" placeholder="E-mail" class="box">
            <input type="password" name="password" id="password" placeholder="password" class="box">
            <p>already have an account? <a href="#login">login</a></p>
            <input type="submit" value="sign up" class="btn">
            <i class="fas fa-times"></i>
        </form>
    </div>
<section class="inside" id="inside">
<div class="insidecourse">
    <img src="home-bg.jpg" alt="course 1">
    <p>course name</p>
    <div class="updatecourse">
        <a href="main.php"><button class="btn">take quiz</button></a>
    </div>

</div>
</section>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="script.js"></script>

    
</body>
</html>