<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<title>Quiz Application</title>
<style>
.learn {
    height: 480px;
    width: 480;
}

#stick {

    position: -webkit-sticky position: sticky top: 0 width: 100%;
}

.home {
    color: black;
    font-size: 125%;
    text-decoration: bold;

}

.a {
    padding-left: 250px;
    font-size: 20px;
    font-weight: bold;
    font-family: "Calibri", Times, serif;

}

.a:hover {
    color: red;

}

.a:visited {
    color: purple;
}
</style>

<body style="background-color:powderblue;">
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light" id="stick">
        <div class="container-fluid">
            <a class="nav-link home" href="index.php">Home</a>
            <div class=”dropdown”>
                <!--Dropdown-->
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images\menu.png" width="30px" height="30px">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="signup_quiz.php" target="_blank">Sign In</a>
                    <a class="dropdown-item" href="login_user_quiz.php" target="_blank">Log In</a>
                    <a class="dropdown-item" href="logout_quiz.php" target="_blank">Log Out</a>
                </div>
            </div>
            <!--end of Dropdown-->



        </div>
    </nav> <!-- end of navbar-->
    <!--Side Bar-->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:16%">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="html_learn.php" class="w3-bar-item w3-button">HTML</a>
        <a href="css_learn.php" class="w3-bar-item w3-button">CSS</a>
        <a href="php_learn.php" class="w3-bar-item w3-button">PHP</a>
        <a href="mysql_learn.php" class="w3-bar-item w3-button">MySQL</a>
        <a href="python_learn.php" class="w3-bar-item w3-button">Python</a>
        <a href="leaderboard.php" class="w3-bar-item w3-button">Leaderboard</a>

    </div>
    <!-- end of sidebar-->
    <!--tutorial links-->
    <h1 style="margin-top:2px; text-align:center;background-color:#f5d32c">Learn And Explore!!</h1>
    <div>
        <a href="https://www.w3schools.com/php/" class="a">PHP Tutorial 1(Documentation)</a><br><br>
        <a href="https://www.geeksforgeeks.org/php-tutorials/" class="a">PHP Tutorial 2(Documentation)</a><br><br>
        <a href="https://www.php.net/" class="a">PHP Tutorial 3 (Video)</a><br><br>
        <a href="https://youtu.be/OK_JCtrrv-c" class="a">PHP Tutorial 4 (Video)</a><br><br>
        <a href="https://youtube.com/playlist?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR" class="a">PHP Tutorial
            5 (Video)</a><br><br>
        <a href="https://youtu.be/cGwSm8xDSwI" class="a">PHP Tutorial 6 (Video)</a><br><br>
    </div>
    <!-- Footer-->
    <?php include("footer.php"); ?>
    <!-- end of footer-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="new_js.js">
    < /body>   < /
    html >