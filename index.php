</head>

<body>

<h2> Grocery</h2>

<hr>

<div class="container-fluid">

  <div class="row">

    <!-- Sidear -->

  </div>

</div>

<table border= "1" class="table table-dark">

		

		 <tr height = "40%"> 

			 <td  <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">

			 <th scope="row" width = "10%"> <a href= "index.html"> Home</a></td>

				<td> <a href= "Aboutus.html"> About us </a> </td>

				<td><a href= "contactus.html">  Contact us </a></td>

				</nav></td>

		 </tr>

		  

   <tr>

		 <td rowspan= "3"> 

<table class="table table-dark"><tr>

		 <td> <a href= "index.html"> Home </a> </br>  </td></tr>

		 <tr> <td> <a href= "Aboutus.html"> About us </a> </br> <td></tr>

			 <tr> <td>	<a href= "contactus.html">  Contact us </a></br></td>

				</tr>

		</table>

		<td colspan ="3"><img src= "imgweb1.jpg"/> 

		

		</td>

			</tr>

						 

		 <tr height= "50%"> 

			<td colspan="3">

			<div class="table-responsive">

			<table class="table table-dark"><!--<div class="table-responsive">

				-->

					<thead>

					 <tr> 

						 <th scope="col"> Type</th>

						 <th scope="col"> Details </th>

						 <th scope="col"> Price </th>

					 </tr>

					 </thead>

					 <tbody>

						 <tr> 

						 <th scope="row"> Kale</td>

							<td> Details </td>

							<td> 50/kg </td>

						</tr>

						 <tr> 

							<th scope="row"> Cabbage</td>

							<td> Details </td>

							<td> 50/kg </td>

						</tr>

						 

						</tr>

					</tbody>

				</table>

		 </td>

		 </tr>

					

		</table>

			

		

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

</body>

</html>

addstudent.php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {
// receive all input values from the form
$studentno = mysqli_real_escape_string($conn,$_POST['studentno']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$age = mysqli_real_escape_string($conn,$_POST['age']);
$course = mysqli_real_escape_string($conn,$_POST['course']);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO studentfile (studentno,name,age,course)
VALUES ('$studentno', '$name', '$age','$course')";
//$go= mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) {
echo '';
echo ' <script type="text/javascript"> alert("Student record added successifully")'; //not showing an alert box.
echo '</script>';
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
<?php
// index.php
header("Location:http://localhost/PATRICK/index.php");
exit();
?>