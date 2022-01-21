<?php
error_reporting(0);  #doest report error
include("conn_quiz.php");
$user_name=$_SESSION['user_name'];

//variable for storing marks/ you can also use this variable to store result of perticulaar user in database!
$marks = 0;

function check_login($con){
	if(!isset($_SESSION['user_id'])){
		echo "<script>alert('Please Log in')</script>";
		
	}

	
}
function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

#update html quiz marks
#update html quiz marks beignner
function html_beg($con){
	$marks = 0;
	$user_name=$_SESSION['user_name'];
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ans1 = $_POST['Q1'];
		$ans2 = $_POST['Q2'];
		$ans3 = $_POST['Q3'];
		$ans4 = $_POST['Q4'];
		$ans5 = $_POST['Q5'];
		$ans6 = $_POST['Q6'];
		$ans7 = $_POST['Q7'];
		$ans8 = $_POST['Q8'];

		//Conditions for checking the right answer
		
		
		if($ans1 == 'b'){ $marks+=2;}
		if(is_null($ans1)){pass;}  #if ans is null/not marked...pass
		
		if($ans2 == 'b'){ $marks+=2;}
		if(is_null($ans2)){pass;}
		
		if($ans3 == 'a'){ $marks+=2;}
		if(is_null($ans3)){pass;}
		
		if($ans4 == 'a'){ $marks+=2;}
		if(is_null($ans4)){pass;}
		
		if($ans5 == 'c'){ $marks+=2;}
		if(is_null($ans5)){pass;}
		
		if($ans6 == 'a'){ $marks+=2;}
		if(is_null($ans6)){pass;}
		
		if($ans7 == 'a'){ $marks+=2;}
		if(is_null($ans7)){pass;}
		
		if($ans8 == 'b'){ $marks+=2;}
		if(is_null($ans8)){pass;}
		
		add_beg_html($con,$marks,$user_name);
		include("leaderboard.php");
		}
		
}
#calculate marks for html intermediate quiz
function html_inter($con){
	$user_name=$_SESSION['user_name'];
	$marks = 0;
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ans1 = $_POST['Q1'];
		$ans2 = $_POST['Q2'];
		$ans3 = $_POST['Q3'];
		$ans4 = $_POST['Q4'];
		$ans5 = $_POST['Q5'];
		$ans6 = $_POST['Q6'];
		$ans7 = $_POST['Q7'];
		$ans8 = $_POST['Q8'];
		$ans9 = $_POST['Q9'];
		$ans10 = $_POST['Q10'];
		
		//Conditions for checking the right answer
		
		
		if($ans1 == 'a'){ $marks+=2;}
		if(is_null($ans1)){pass;}  #if ans is null/not marked...pass
		
		if($ans2 == 'a'){ $marks+=2;}
		if(is_null($ans2)){pass;}
		
		if($ans3 == 'a'){ $marks+=2;}
		if(is_null($ans3)){pass;}
		
		if($ans4 == 'd'){ $marks+=2;}
		if(is_null($ans4)){pass;}
		
		if($ans5 == 'd'){ $marks+=2;}
		if(is_null($ans5)){pass;}
		
		if($ans6 == 'c'){ $marks+=2;}
		if(is_null($ans6)){pass;}
		
		if($ans7 == 'a'){ $marks+=2;}
		if(is_null($ans7)){pass;}
		
		if($ans8 == 'c'){ $marks+=2;}
		if(is_null($ans8)){pass;}

		if($ans9 == 'b'){ $marks+=2;}
		if(is_null($ans9)){pass;}

		if($ans10 == 'a'){ $marks+=2;}
		if(is_null($ans10)){pass;}
		#echo $marks;
		add_inter_html($con,$marks,$user_name);
		#include("leaderboard.php");
	}
		
}
#calculate marks for css beginner quiz
function css_beg($con){
	$marks = 0;
	$user_name=$_SESSION['user_name'];
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ans1 = $_POST['Q1'];
		$ans2 = $_POST['Q2'];
		$ans3 = $_POST['Q3'];
		$ans4 = $_POST['Q4'];
		$ans5 = $_POST['Q5'];
		$ans6 = $_POST['Q6'];
		$ans7 = $_POST['Q7'];
		$ans8 = $_POST['Q8'];
		$ans9 = $_POST['Q9'];
		$ans10 = $_POST['Q10'];

		//Conditions for checking the right answer
		
		
		if($ans1 == 'd'){ $marks+=2;}
		if(is_null($ans1)){pass;}  #if ans is null/not marked...pass
		
		if($ans2 == 'c'){ $marks+=2;}
		if(is_null($ans2)){pass;}
		
		if($ans3 == 'c'){ $marks+=2;}
		if(is_null($ans3)){pass;}
		
		if($ans4 == 'c'){ $marks+=2;}
		if(is_null($ans4)){pass;}
		
		if($ans5 == 'b'){ $marks+=2;}
		if(is_null($ans5)){pass;}
		
		if($ans6 == 'd'){ $marks+=2;}
		if(is_null($ans6)){pass;}
		
		if($ans7 == 'a'){ $marks+=2;}
		if(is_null($ans7)){pass;}
		
		if($ans8 == 'c'){ $marks+=2;}
		if(is_null($ans8)){pass;}

		if($ans9 == 'c'){ $marks+=2;}
		if(is_null($ans9)){pass;}

		if($ans10 == 'b'){ $marks+=2;}
		if(is_null($ans10)){pass;}
		
		add_beg_css($con,$marks,$user_name);
		include("leaderboard.php");
		}
		
}

function css_inter($con){
	$marks = 0;
	$user_name=$_SESSION['user_name'];
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$ans1 = $_POST['Q1'];
		$ans2 = $_POST['Q2'];
		$ans3 = $_POST['Q3'];
		$ans4 = $_POST['Q4'];
		$ans5 = $_POST['Q5'];
		$ans6 = $_POST['Q6'];
		$ans7 = $_POST['Q7'];
		$ans8 = $_POST['Q8'];
		$ans9 = $_POST['Q9'];
		$ans10 = $_POST['Q10'];

		//Conditions for checking the right answer
		
		
		if($ans1 == 'd'){ $marks+=2;}
		if(is_null($ans1)){pass;}  #if ans is null/not marked...pass
		
		if($ans2 == 'd'){ $marks+=2;}
		if(is_null($ans2)){pass;}
		
		if($ans3 == 'c'){ $marks+=2;}
		if(is_null($ans3)){pass;}
		
		if($ans4 == 'c'){ $marks+=2;}
		if(is_null($ans4)){pass;}
		
		if($ans5 == 'c'){ $marks+=2;}
		if(is_null($ans5)){pass;}
		
		if($ans6 == 'b'){ $marks+=2;}
		if(is_null($ans6)){pass;}
		
		if($ans7 == 'a'){ $marks+=2;}
		if(is_null($ans7)){pass;}
		
		if($ans8 == 'a'){ $marks+=2;}
		if(is_null($ans8)){pass;}

		if($ans9 == 'a'){ $marks+=2;}
		if(is_null($ans9)){pass;}

		if($ans10 == 'b'){ $marks+=2;}
		if(is_null($ans10)){pass;}
		
		add_inter_css($con,$marks,$user_name);
		include("leaderboard.php");
		}
		
}



#update html quiz marks intermediate
function add_beg_html($con,$marks,$user_name)
	{
		$query="update html set beginner= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
	}
function add_inter_html($con,$marks,$user_name)
{
	$query="update html set intermediate = '$marks' where user_name='$user_name'";
	$result=mysqli_query($con, $query);
	include("leaderboard.php");
}
#update html quiz marks difficult

function add_diff_html($con,$marks,$user_name)
{
		$query="update html set diff1= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}
#update css quiz marks beginner

function add_beg_css($con,$marks,$user_name)
{
			$query="update css set beginner= '$marks' where user_name='$user_name'";
			$result=mysqli_query($con, $query);
			include("leaderboard.php");
			}
#update css quiz marks intermediate

function add_inter_css($con,$marks,$user_name)
{
	$query="update css set intermediate= '$marks' where user_name='$user_name'";
	$result=mysqli_query($con, $query);
	include("leaderboard.php");
}

#update css quiz marks difficult

function add_diff_css($con,$marks,$user_name)
{
	$query="update css set diff1= '$marks' where user_name='$user_name'";
	$result=mysqli_query($con, $query);
	include("leaderboard.php");
}

#update php quiz marks beginner

function add_beg_php($con,$marks,$user_name)
{
		$query="update php set beginner= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}

#update mysql quiz marks beginner

function add_beg_mysql($con,$marks,$user_name)
{
		$query="update mysql set beginner= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}
#update mysql quiz marks intermediate
function add_inter_mysql($con,$marks,$user_name)
{
		$query="update mysql set intermediate= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}
#update mysql quiz marks difficult
function add_diff_mysql($con,$marks,$user_name)
{
		$query="update mysql set diff1= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}
#update python quiz marks beginner
function add_beg_python($con,$marks,$user_name)
{
		$query="update python set beginner= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}
#update python quiz marks intermediate

function add_inter_python($con,$marks,$user_name)
{
		$query="update python set intermediate= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}
#update python quiz marks difficult

function add_diff1_python($con,$marks,$user_name)
{
		$query="update python set diff1= '$marks' where user_name='$user_name'";
		$result=mysqli_query($con, $query);
		include("leaderboard.php");
}

#check_login($con);

#html_inter($con);
?>