<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.login_image {
  width: 40%;
  border-radius: 50%;
}
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="loginuser_quiz.php" method="post">
<div class="imgcontainer">
    <img src="images/login_image.png" alt="login_image" class="login_image">
  </div>
<div class="container">
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>
        
    <div class="form-group">
                    <input type="submit" onclick="loginuser_quiz.php" name="submit" class="btn btn-primary" value="Login">
                </div>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="http://localhost/php_course/self/check_login.php">password?</a></span>
      <a href="signup_quiz.php" style="width:250px;"class="btn btn-default">Not a Member? Register here</a>
  </div>
</form>

</body>
</html>
