<html>
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
</html>
<?php 

include("functions_quiz.php");
include("conn_quiz.php");

	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$name=$_POST['name'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{	
				
			if (strlen($password) < 6) 	
				{
					echo '<p class="error">Password must have atleast 6 characters.</p>'; 
				}
			elseif (empty($confirm_password)) 
				{
					echo '<p class="error">Please enter confirm password.</p>';
				}
			elseif ($password != $confirm_password) 
				{ 
					echo '<p class="error">Password did not match.</p>';
				}
				
			else{
			$user_id = random_num(15);
			
			
			$query = "insert into quiz.user(user_id,name,user_name,password) values ('$user_id','$name','$user_name','$password')";
			mysqli_query($con, $query);
				#updating tables to store marks
			$query1 = "insert into quiz.html(user_name) values ('$user_name')";
			mysqli_query($con, $query1);

			$query2 = "insert into quiz.css(user_name) values ('$user_name')";
			mysqli_query($con, $query2);

			$query5 = "insert into quiz.python(user_name) values ('$user_name')";
			mysqli_query($con, $query5);


			echo '<div class="imgcontainer">You are registered succesfully <img src="data:image/png;base64,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"green_tick"></div>';
			}
	}else
		{
			echo "Please enter some valid information!";
		}
	}
?>