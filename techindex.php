<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn With Utkarsh</title>
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
                <li><a class="active" href="techindex.php#home">home</a></li>
                <li><a href="techindex.php#course">course</a></li>
      
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

    <section class="home" id="home">
        <h1>#1 learning paltform</h1>
        <p>you will get the best courses to learn and upgrade your skills on this platform.</p>
        <p>Happy learning!</p>
        <a href="#course"><button class="btn">get started</button></a>

        <div class="shape"></div>
    </section>

    <section class="course" id="course">
        <h1 class="heading">Courses</h1>

        <div class="box-container">
            <div class="box">
                <img src="course1.jpg" alt="course 1">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="insidecourse.php" class="title">course name</a>
                    <p>course description is here</p>
                    <div class="info">
                        <h3><i class="far fa-clock"></i>2 hours</h3>
                        <h3><i class="far fa-calendar-alt"></i>6 months</h3>
                        <h3><i class="fas fa-book"></i>12 module</h3>


                    </div>
                </div>
            </div>

            <div class="box">
                <img src="course2.jpg" alt="course 2">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="insidecourse.php" class="title">course name</a>
                    <p>course description is here</p>
                    <div class="info">
                        <h3><i class="far fa-clock"></i>2 hours</h3>
                        <h3><i class="far fa-calendar-alt"></i>6 months</h3>
                        <h3><i class="fas fa-book"></i>12 module</h3>


                    </div>
                </div>
            </div>

            <div class="box">
                <img src="course3.jpg" alt="course 3">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <a href="insidecourse.php" class="title">course name</a>
                    <p>course description is here</p>
                    <div class="info">
                        <h3><i class="far fa-clock"></i>2 hours</h3>
                        <h3><i class="far fa-calendar-alt"></i>6 months</h3>
                        <h3><i class="fas fa-book"></i>12 module</h3>


                    </div>
                </div>
            </div>
        </div>
        <p>To add a course click on 'add course' button given below</p>
        <section class="addition" id="addition">
        <div class="addcourse">
            <a href="#addition"><button class="btn">add course</button></a>
        </div>

        <div class="add" >
        
            <form action="techindex.php" method="post">
                <h3>add course</h3>
    
                <input type="file" name="image" id="file" accept="image/*">
                <label for="file">
                    choose course thumbnail
                </label>
                <input type="int" name="stars" id="stars" placeholder="Rating out of 5" class="box">
                <input type="text" name="course_name" id="course_name" placeholder="course name" class="box">
                <input type="text" name="course_desc" id="course_desc" placeholder="course description" class="box">
                <input type="int" name="hours" id="hours" placeholder="hours to complete the course" class="box">
                <input type="int" name="months" id="months" placeholder="months to complete the course" class="box">
                <input type="int" name="modules" id="modules" placeholder="total modules in the course" class="box">
    
                <input type="submit" value="submit" class="btn">
                <i class="fas fa-times"></i>
            </form>
            </div>
    </section>
    </section>
 
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="script.js"></script>
</body>
</html>