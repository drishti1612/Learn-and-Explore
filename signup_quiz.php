


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
    <style>
.imgcontainer {
  text-align: center;
  font-size:70px;
  margin: 170px 0 12px 0;
}
img.green_tick{
    width:10%;
    height:25%;
    position:relative;
    position:center;

    border-radius:30%;
}
</style>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Register</h2>
            <p>Please fill this form to create an account.</p>
            <form action="adduser_quiz.php" method="post">
                <div class="form-group">
                    <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" onclick="adduser_quiz.php" name="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>Already have an account? <a href="#">Login here</a>.</p>
            </form>
        </div>
    </div>
</div>
</body>
</html>