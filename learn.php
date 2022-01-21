<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>
<title>Quiz Application</title>
<style>
.learn {
    height: 16rem;
    width: 18rem;
}
.home{
    color:black;
    font-size:125%;
    text-decoration:bold;

}
</style>

<body style="background-color:powderblue;">
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light" id="stick">
        <div class="container-fluid"> <a class="nav-link home" href="index.php">Home</a>
            <div class=”dropdown”>
                <!--Dropdown-->
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images\menu.png" width="30px" height="30px">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="signup_quiz.php">Sign In</a>
                    <a class="dropdown-item" href="login_user_quiz.php">Log In</a>
                    <a class="dropdown-item" href="logout_quiz.php">Log Out</a>
                </div>
            </div>
            <!--end of Dropdown-->



        </div>
    </nav> <!-- end of navbar-->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card" style="height:20rem; width: 18rem; margin-left:90px; margin-top:40px">
                <class="card-img-top"><img src="images\htmll.png" class="learn">
                    <div class="card-body">
                        <h3 class="card-text">
                            <a href="html_learn.php" class="btn btn-primary" style="width:15rem">
                                Learn HTML</a>
                        </h3>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card" style="height:20rem;width: 18rem; margin-left:90px; margin-top:40px">
            <class="card-img-top"><img src="images\css1.jpg" class="learn">
                    <div class="card-body">
                        <h3 class="card-text">
                            <a href="css_learn.php" class="btn btn-primary" style="width:15rem">
                                Learn CSS</a>
                        </h3>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card" style="height:20rem;width: 18rem; margin-left:90px; margin-top:40px">
            <class="card-img-top"><img src="images\php.jpg" class="learn">
                    <div class="card-body">
                        <h3 class="card-text">
                            <a href="php_learn.php" class="btn btn-primary" style="width:15rem">
                                Learn PHP</a>
                        </h3>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card" style="height:20rem;width: 18rem; margin-left:90px; margin-top:40px">
            <class="card-img-top"><img src="images\mysql.png" class="learn">
                    <div class="card-body">
                        <h3 class="card-text">
                            <a href="mysql_learn.php" class="btn btn-primary" style="width:15rem">
                                Learn MySQL</a>
                        </h3>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card" style="height:20rem;width: 18rem; margin-left:90px; margin-top:40px">
            <class="card-img-top"><img src="images\python.jpg" class="learn">
                    <div class="card-body">
                        <h3 class="card-text">
                            <a href="python_learn.php" class="btn btn-primary" style="width:15rem">
                                Learn Python</a>
                        </h3>
                    </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

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

</body>

</html>