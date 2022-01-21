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
    height: 480px;
    width: 480;
}

.home{
    color:black;
    font-size:125%;
    text-decoration:bold;

}

</style>

<body style="background-color:powderblue;">
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <div class=”dropdown”>
        <a class="nav-link home" href="index.php">Home<img src="images\menu.png" width="30px" height="30px"></a>
            
                <!--Dropdown-->
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!--<img src="images\menu.png" width="30px" height="30px">-->
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
    <div>
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card" style="width: 30rem; height: 35rem; margin-top:100px; margin-left:90px;">
                <class="card-img-top"><img src="images\learn.jpg" class="learn">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="learn.php" class="btn btn-primary btn-lg" style="width: 20rem; margin-left:43px"> Learn</a>
                        </h3>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card" style="width: 30rem; height: 35rem; margin-top:100px; margin-left:250px;">
                <class="card-img-top"><img src="images\quiz_time.png" class="learn">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="quiz.php" class="btn btn-primary btn-lg" style="width: 20rem; margin-left:43px">
                                Quiz Time!!</a>
                        </h3>
                    </div>
            </div>
        </div>

    </div>
    <br><br>
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
    </html >