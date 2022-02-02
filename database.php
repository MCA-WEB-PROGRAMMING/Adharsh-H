<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="nam"></td>
            </tr>

            <tr>
                <td>Age :</td>
                <td><input type="text" name="ag"></td>
            </tr>

            <tr>
                <td>Address :</td>
                <td><input type="text" name="add"></td>
            </tr>

            <tr>
                <td>Place :</td>
                <td><input type="text" name="plac"></td>
            </tr>

            <tr>
                <td>Phone_Number :</td>
                <td><input type="text" name="phone"></td>
            </tr>

            <tr>
                <td><input type="submit" name="btn" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

    <?php
    if(isset($_POST['btn']))
    {
        $a=$_POST['nam'];
        $b=$_POST['ag'];
        $c=$_POST['add'];
        $d=$_POST['plac'];
        $e=$_POST['phone'];
        $conn = mysqli_connect("localhost","root","");
        if(!$conn)
        {
            die("connection failed");
        }
        $db = mysqli_select_db($conn,"web_lab");
        if(!$db)
        {
            die("db failed");

        }

        $insert = "INSERT INTO detail(Name,Age,Address,Place,Phone_Number)VALUES('$a','$b','$c','$d','$e')";
        $f = mysqli_query($conn,"$insert");
        if(!$f)
        {
            die("insert failed");
        }
        $q="SELECT * FROM detail";
	$t=mysqli_query($conn,"$q");
	if(!$t){
		die("Insert failed");
	}
	else{
		echo "<table border = '5'>
		<tr>
		<th>NAME</th>
		<th>AGE</th>
		<th>ADDRESS</th>
		<th>PLACE</th>
		<th>PHONE</th>
		</tr>";
        while($row=mysqli_fetch_assoc($t)){
			echo"<tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['place']."</td><td>".$row['phone_number']."</td></tr>";
		}
		echo "</table>";
	}
	
}
?>

    



    


