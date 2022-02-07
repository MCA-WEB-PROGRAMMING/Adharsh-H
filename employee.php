<html>
<head>
</head>
<body bgcolor="honeydew">
<center>
<h2>Employee Details</h2>
<form action="" method="POST">
<table>
<tr>
<td>Employee ID:</td>
<td><input type="text" name="eid"></td>
</tr>

<tr>
<td>Employee Name:</td>
<td><input type="text" name="ename"></td>
</tr>

<tr>
<td>Job Name:</td>
<td><input type="text" name="ejob"></td>
</tr>

<tr>
<td>Manager ID:</td>
<td><input type="text" name="manid"></td>
</tr>

<tr>
<td>Salary:</td>
<td><input type="text" name="sal"></td>
</tr>


<tr>
<td>
<input type="submit" name="btn" value="Submit">
</td>
</tr>
</table>

</form>

<form action="" method="POST">
<table>
<tr>
<td>
    Employees having Salary Greater than 35000 Click&nbsp;&nbsp;<input type="submit" name="salary_btn" value="Here">
</td>
</tr>
</table>

</form>
</center>
</body>
</html>

<?php
if(isset($_POST['btn'])){
	$a=$_POST['eid'];
	$b=$_POST['ename'];
	$c=$_POST['ejob'];
	$d=$_POST['manid'];
	$e=$_POST['sal'];
	$connection = mysqli_connect("localhost","root","");
	if(!$conn){
		die("Connection failed");
	}
	
	$db=mysqli_select_db($connection,"webprogram");
	if(!$db){
		die("Db failed");
	}
	
	
	$in="INSERT INTO employee(emp_id,emp_name,job_name,manager_id,salary) VALUES('$a','$b','$c','$d','$e')";	
	$r=mysqli_query($connection,"$in");
	if(!$r){
		die("Insert failed");
	}
	
	
		
}
else if(isset($_POST['salary_btn'])){
	$connection = mysqli_connect("localhost","root","");
	if(!$connection){
		die("Connection failed");
	}
	
	$db=mysqli_select_db($connection,"webprogram");
	if(!$db){
		die("Db failed");
	}

	$l=35000;
	$s="SELECT * FROM employee WHERE salary >35000";

	$t=mysqli_query($connection,"$s");

	if(!$t){
		die("Insert failed");
	}
	else{
		echo "<table border='3'>
		<tr>
		<th>Employee ID</th>
		<th>Employee Name</th>
		<th>Job</th>
		<th>Manager ID</th>
		<th>Salary</th>
		</tr>";
		while($row=mysqli_fetch_assoc($t)){
			echo"<tr><td>".$row['emp_id']."</td><td>".$row['emp_name']."</td><td>".$row['job_name']."</td><td>".$row['manager_id']."</td><td>".$row['salary']."</td></tr>";
		}
		echo "</table>";
	}
}
?>