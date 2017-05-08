<?php 
session_start();
include('conn.php');
 $Login_user_id=0;
if(isset($_POST['Get_Result'])){
	$Login_user_id=$_POST['txtid'];
	
	$query="SELECT * FROM student where std_id='$Login_user_id'";
	
	$rrr=mysqli_query($conn,$query);
	if($ro=mysqli_num_rows($rrr)>0){
		$ro=mysqli_fetch_assoc($rrr);
		$_SESSION['user_id'] = $ro['std_id'];
		
		header('Location:timetable.php');
	}else{
		header('Location:index.php');
	}
	
}
?>