<!DOCTYPE html>
<html>

<body>
	<center>

		<h3>
			Program to print array sum
		</h3>
	</center>
</body>

</html>

<?php    
$numbers=array("100","160","20","67");  
echo "array: <br>";
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}  
echo "Sum of array elements is: ";
echo array_sum($numbers);
?>   