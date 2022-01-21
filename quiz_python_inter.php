<?php 
include("functions_quiz.php");
$user_name=$_SESSION['user_name'];
check_login($con);
if(isset($_POST['submit'])){
    python_inter($con);  #function is called onlcick of button "Submit"
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF=8">
    
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        box-sizing: border-box;

    }

    html,
    body {
        overflow-x: hidden;

    }

    .main {
        width: 800px;
        height: auto;
        margin:150px 250px;
        margin-right:center;
        border: 3px solid black;
        box-sizing: border-box;
        padding: 3%;
        box-shadow: 3px 3px 12px white;
        background-color:beige;
    }

    .main h1 {
        color: black;
        text-align: center;
    }

    .group {
        padding: 1%;
        color: black;
    }

    input[type="submit"] {
        background-color: yellowgreen;
        height: 40px;
        width: 100px;
        border-radius: 10px;
        font-weight: bolder;
    }

    @media only screen and (max-width:1000px) {
        .main {
            width: 100%;
            
            margin-top: 300px;
            border: 0px solid;
            box-sizing: border-box;
            padding: 1%;
        }
    }
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
</head>

<body style="background-color:powderblue;">
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
    <!-- Quiz Body -->
    <div class="main">
        <h1>Python Quiz </h1>
        <div style="color: black; display:flex; justify-content:space-around;">
            <pre>Each question:2 marks </pre>
            <pre>Total Marks:20</pre>
        </div>
        <form method="post">
            <div class="group_1">
                <h2><span style="color: tomato;">Q1:</span>Which method can be used to remove any whitespace from both the beginning and the end of a string?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q1" id="A1" value="a">
                        <label for="A1">ptrim()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q1" id="B1" value="b">
                        <label for="B1">len()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q1" id="C1" value="c">
                        <label for="C1">strip()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q1" id="D1" value="d">
                        <label for="D1">trim()</label>
                    </div>

                </div>
            </div>
            <hr>
            <div class="group_1">
                <h2><span style="color: tomato;">Q2: </span>Which method can be used to return a string in upper case letters?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q2" id="A2" value="a">
                        <label for="A2">toUpperCase()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q2" id="B2" value="b">
                        <label for="B2">upper()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q2" id="C2" value="c">
                        <label for="C2">Uppercase()</label>
                    </div>

                </div>
            </div>
            <hr>
            <div class="group_1">
                <h2><span style="color: tomato;">Q3: </span>Which method can be used to replace parts of a string?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q3" id="A3" value="a">
                        <label for="A3">replaceString()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q3" id="B3" value="b">
                        <label for="B3">replace()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q3" id="C3" value="c">
                        <label for="C3">repl()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q3" id="D3" value="d">
                        <label for="D3">switch()</label>
                    </div>

                </div>
            </div>
            <hr>
            <!-- Ques 4-->
            <div class="group_1">
                <h2><span style="color: tomato;">Q4: </span>Which operator is used to multiply numbers?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q4" id="A4" value="a">
                        <label for="A4">#</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q4" id="B4" value="b">
                        <label for="B4">%</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q4" id="C4" value="c">
                        <label for="C4">*</label>
                    </div>

                </div>
            </div>
            <hr>
            <div class="group_1">
                <h2><span style="color: tomato;">Q5: </span>Which operator can be used to compare two values?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q5" id="A5" value="a">
                        <label for="A5">==</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q5" id="B5" value="b">
                        <label for="B5">=</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q5" id="C5" value="c">
                        <label for="C5"><></label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q5" id="D5" value="d">
                        <label for="D5">><</label>
                    </div>

                </div>
            </div>
            <hr>
            <!-- Ques 6-->
            <div class="group_1">
                <h2><span style="color: tomato;">Q6:</span>Which of these collections defines a LIST?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q6" id="A6" value="a">
                        <label for="A6">("apple", "banana", "cherry")</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q6" id="B6" value="b">
                        <label for="B6">{"name": "apple", "color": "green"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q6" id="C6" value="c">
                        <label for="C6">{"apple", "banana", "cherry"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q6" id="C6" value="d">
                        <label for="C6">["apple", "banana", "cherry"]</label>
                    </div>

                </div>
            </div>
            <hr>
            <div class="group_1">
                <h2><span style="color: tomato;">Q7: </span>Which of these collections defines a TUPLE?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q7" id="A7" value="a">
                        <label for="A7">{"apple", "banana", "cherry"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q7" id="B7" value="b">
                        <label for="B7">["apple", "banana", "cherry"]</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q7" id="C7" value="c">
                        <label for="C7">{"name": "apple", "color": "green"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q7" id="D7" value="d">
                        <label for="D7">("apple", "banana", "cherry")</label>
                    </div>

                </div>
            </div>
            <hr>
            <!-- Question 8-->
            <div class="group_1">
                <h2><span style="color: tomato;">Q8: </span>Which of these collections defines a SET?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q8" id="A8" value="a">
                        <label for="A8">{"apple", "banana", "cherry"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q8" id="B8" value="b">
                        <label for="B8">["apple", "banana", "cherry"]</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q8" id="C8" value="c">
                        <label for="C8">{"name": "apple", "color": "green"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q8" id="D8" value="d">
                        <label for="D8">("apple", "banana", "cherry")</label>
                    </div>

                </div>
            </div>
            
            <hr>
            <!-- Question 9 -->
            <div class="group_1">
                <h2><span style="color: tomato;">Q9: </span>Which of these collections defines a DICTIONARY?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q9" id="A9" value="a">
                        <label for="A9">("apple", "banana", "cherry")</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q9" id="B9" value="b">
                        <label for="B9">{"apple", "banana", "cherry"}</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q9" id="B9" value="c">
                        <label for="C9">["apple", "banana", "cherry"]</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q9" id="B9" value="d">
                        <label for="D9">{"name": "apple", "color": "green"}</label>
                    </div>

                </div>
            </div>
            <hr>
            <!-- Question 10 -->
            <div class="group_1">
                <h2><span style="color: tomato;">Q10: </span>Which collection is ordered, changeable, and allows duplicate members?</h2>
                <div class="group_2">

                    <div class="group">
                        <input type="radio" name="Q10" id="A10" value="a">
                        <label for="A10">Tuple</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q10" id="B10" value="b">
                        <label for="B10">Set()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q10" id="C10" value="c">
                        <label for="C10">Dictionary()</label>
                    </div>
                    <div class="group">
                        <input type="radio" name="Q10" id="C10" value="d">
                        <label for="D10">List()</label>
                    </div>

                </div>
            </div>

            <div class="group_1" style="margin-top: 10%; text-align:center;">
                <div class="group_2">
                    <div class="group"><input type="submit" name="submit" value="Submit"></div>
                </div>
            </div>
        </form>
        
    </div>
</body>

</html>
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