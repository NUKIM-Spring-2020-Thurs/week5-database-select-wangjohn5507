<?php
$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
if($result=mysqli_query($link,$SQL)){
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td><b>No</b></td>";
	echo "<td><b>Fname</b></td>";
	echo "<td><b>Minit</b></td>";
	echo "<td><b>Lname</b></td>";
	echo "<td><b>Bdate</b></td>";
	echo "<td><b>Address</b></td>";
	echo "<td><b>Sex</b></td>";
	echo "<td><b>Salary</b></td>";
	echo "</td>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Bdate"]."</td><td>".$row["Address"]."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td>";
	echo "</tr>";}
}else{
	echo "找不到";

}


