<?php
echo "Original Order"."<br>";
$a = array("Chandrakanth","Arun","Binoy","Arjun","Vyshnav","Sanal");
print_r($a);
//Ascending Order
echo "<br><br>"."Ascending Order"."<br>";
asort($a);
print_r($a);
//Descending Order
echo "<br><br>"."Descending Order"."<br>";
arsort($a);
print_r($a);

?>
