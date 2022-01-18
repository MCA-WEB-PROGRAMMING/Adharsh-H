<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = "honeydew">
    
    <form method="POST">
        <table>
            <tr><th> BILL</th></tr>
            <tr>
            <td>Consumer Number:</td><td>
                  <input type="text" name="number"></br></td>
            </tr>
            <tr>
            <td>Number of Units:</td><td>  
                <input type="text" name="unit"></br></td>
            </tr>
            <tr>
            <td>Tarif:</td>
            <td> 
            <select name="tarif">
            <option>Select </option>
            <option>Rural </option>
            <option>Residential </option>
            <option>Commercial </option>
            </select><br>
        </td>
            </tr>
            <tr><td>
            <input type="submit" value="SUBMIT" name="btn"></td>
            </tr>
            </table>
            </form>
            
</body>
</html><br>

<?php
if(isset($_POST["btn"])){
	$num=$_POST["number"];
	$unit=$_POST["unit"];
	$t=$_POST["tarif"];

	if($t=="Rural")
    {
		if($unit<=50)
        {
			$price=(($unit*0.40)+30);	
		}
		else if($unit>50 && $unit<=100)
        {
			$price=(($unit*0.65)+30);
		}
		else if($unit>100 && $unit<=150)
        {
			$price=(($unit*0.90)+30);
		}
		else if($unit>150 && $unit<=250)
        {
			$price=(($unit*1.50)+30);
		}
		else if($unit>250 && $unit<=400)
        {
			$price=(($unit*1.90)+30);
		}
		else{
			$price=(($unit*2.50)+30);
		}
	
	}
	if($t=="Residential")
    {
		if($unit<=50)
        {
			$price=(($unit*0.60)+40);	
		}
		else if($unit>50 && $unit<=100)
        {
			$price=(($unit*0.90)+40);
		}
		else if($unit>100 && $unit<=150)
        {
			$price=(($unit*1.30)+40);
		}
		else if($unit>150 && $unit<=250)
        {
			$price=(($unit*1.80)+40);
		}
		else if($unit>250 && $unit<=400)
        {
			$price=(($unit*2.30)+40);
		}
		else
        {
			$price=(($unit*2.80)+40);
		}
	
	}
	if($t=="Commercial")
    {
		if($unit<=50)
        {
			$price=(($unit*0.90)+60);	
		}
		else if($unit>50 && $unit<=100)
        {
			$price=(($unit*1.50)+60);
		}
		else if($unit>100 && $unit<=150)
        {
			$price=(($unit*2)+60);
		}
		else if($unit>150 && $unit<=250)
        {
			$price=(($unit*2.50)+60);
		}
		else if($unit>250 && $unit<=400)
        {
			$price=(($unit*3)+60);
		}
		else{
			$price=(($unit*3.80)+60);
		}
	
	}

    echo " ELECTRICITY BILL <br><br>";
	echo "Consumer Number:".$num."<br>";
	echo "Number of Units Consumed:".$unit."<br>";
	echo "Bill Amount= RS.".$price."<br>";
}
?>
