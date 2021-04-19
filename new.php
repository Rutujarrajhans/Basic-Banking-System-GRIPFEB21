<?php
$server="remotemysql.com";
$username ="KtFn8Akxrf";
$password ="PfsUZWV9fc";
$dbname = "KtFn8Akxrf";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$mn=mysqli_real_escape_string($conn,$_POST['mn']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$model=mysqli_real_escape_string($conn,$_POST['model']);


if(!empty($_POST['first_name']) && !empty($_POST['last_name']) 
			&& !empty($_POST['company']) && !empty($_POST['email']) 
			&& !empty($_POST['mn'])  && !empty($_POST['model']))
			  {
		$sql="insert into next(first_name,last_name,address,email_id,contactno,model_no) 
		values('$first_name' ,'$last_name','$company','$email','$mn','$model')";
		
			  }
			  else{
				  echo "all fields are mandatory";
			  }

			  if($conn->query($sql)===TRUE){
				echo "form submitted";
			
			}
			
			else{
				echo "error" .$sql."<br/>".$conn->error;
			}
            $conn->close();
          
            
?>