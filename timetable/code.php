<?php 
session_start();
include("conn.php");
$user_id=$_SESSION['user_id'];

	$q="select * from course_allocation join courses on course_allocation.crs_id where course_allocation.crs_id=courses.c_id and std_reg='$user_id'";
	$reg_courses=mysqli_query($conn,$q);
	
	$query="select * from course_allocation
					 join timetable on course_allocation.crs_id=timetable.crs_id
					 join courses on course_allocation.crs_id=courses.c_id
					 join teacher on courses.teacher_id=teacher.Teacher_id
					 join days on timetable.day_id=days.idDays
 			where course_allocation.std_reg='$user_id'";
	
			$result=mysqli_query($conn,$query);

	$timeTabl=array();
	 $Monday =array();
	$Tuesday =array();
	$Wenesday =array();
	$Thursday =array();
	$Friday =array();
foreach($result as $value){
	if( $value["day_id"]==1){
		$m=array("StartTimeId"=>rtrim($value['idTiming']),"StartTime"=>$value['time_from'],rtrim("CT")=>rtrim($value['course_Title']),"TeacherNAme"=>$value['teacher_name'],"DayName"=>$value['Name'],"Slot"=>$value['slot']);
		array_push($Monday,$m);
	}
	if( $value["day_id"]==2){
		$T=array("StartTimeId"=>$value['idTiming'],"StartTime"=>$value['time_from'],
				 "CT"=>rtrim($value['course_Title']),"TeacherNAme"=>$value['teacher_name'],"DayName"=>$value['Name'],"Slot"=>$value['slot']);
		array_push($Tuesday,$T);
	}
	if( $value["day_id"]==3){
		$W=array("StartTimeId"=>$value['idTiming'],"StartTime"=>$value['time_from'],
				 "CT"=>rtrim($value['course_Title']),"TeacherNAme"=>$value['teacher_name'],
				 "DayName"=>$value['Name'],"Slot"=>$value['slot']);
		array_push($Wenesday,$W);
	}
	if( $value["day_id"]==4){
		$Th=array("StartTimeId"=>$value['idTiming'],"StartTime"=>$value['time_from'],rtrim("CT")=>rtrim($value['course_Title']),"TeacherNAme"=>$value['teacher_name'],"DayName"=>$value['Name'],"Slot"=>$value['slot']);
		array_push($Thursday,$Th);
	}
	if( $value["day_id"]==5){
		$Fr=array("StartTimeId"=>$value['idTiming'],"StartTime"=>$value['time_from'],
				  "DayName"=>$value['Name'],rtrim("CT")=>rtrim($value['course_Title']),
				  "TeacherNAme"=>$value['teacher_name'],"Slot"=>$value['slot']);
		array_push($Friday,$Fr);
	}
}

$timeTabl=array($Monday,$Tuesday,$Wenesday,$Thursday,$Friday);
?>