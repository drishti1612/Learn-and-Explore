<?php 


include("conn_quiz.php");
error_reporting(0);
    #include("functions_quiz.php");
#fetch html marks
$user_name=$_SESSION['user_name'];
$query="SELECT * FROM HTML WHERE user_name='$user_name' ";
$result=mysqli_query($con,$query);
$marks_html=mysqli_fetch_assoc($result);

#fetch css marks
$query="SELECT * FROM css WHERE user_name='$user_name' ";
$result=mysqli_query($con,$query);
$marks_css=mysqli_fetch_assoc($result);



#fetch python marks
$query="SELECT * FROM python WHERE user_name='$user_name' ";
$result=mysqli_query($con,$query);
$marks_python=mysqli_fetch_assoc($result);




#echo"hello";
?>
<html>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    <!--<script src="func_notes.php"></script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<script src="new_func.php"></script>-->
</head>
<title> Leaderboard </title>

<body>
    
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light" id="stick">
        <div class="container-fluid">
        <h4><a class="nav-link home" href="index.php">Home</a></h4>
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

    <!--Table Leaderboard-->

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th></th>
                <!--Column Table heading-->
                <th>Easy</th>
                
                <th>Difficult</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">HTML</th>
                <!--Row head-->
                <td><?php echo $marks_html['beginner']
                ?> </td> <!-- Cell...enter marks-->
                <td><?php echo $marks_html['intermediate'] ?></td>
                
                <!--<td>Marks</td>-->

            </tr>
            <tr>
                <th scope="row">CSS</th>
                <td><?php echo $marks_css['beginner']
                ?> </td>
                <td><?php echo $marks_css['intermediate']
                ?> </td>
                
                

            </tr>
            
            <tr>
                <th scope="row">Python</th>
                <td><?php echo $marks_python['beginner']
                ?></td>
                <td> <?php echo $marks_python['intermediate']
                ?> </td>
                
              

            </tr>
            
        </tbody>
    </table>
    
    <!-- end of leaderboard-->
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
        
    </body> </html>
