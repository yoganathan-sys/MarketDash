<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
crossorigin="anonymous">
</head>
<body style='color:powderblue'>
<h1 align='center' style='color:red'>DELETE DATA</h1>
<body>
<div class='container'>
<div class="card">
<div class="card-header" style='background-color:black; color:yellow'>
<h3> <u>Delete Student Information</u> </h3>
</div>
<div class="card-body" style='background-color:lightgreen; color:blue'>
<form action='#' method='post'>
<div class="form-group">
<label>Student Reg: </label>
<input type='number' name='reg' class="form-control" 
placeholder='Enter Reg.No: '>
</div>
<div class="form-group">
<label>Student Name: </label>
<input type='text' name='name' class="form-control" 
placeholder='Enter Student Name: '>
</div>
<button type="submit" name='submit' class="btn btn-outline-dark" onclick="return confirm('Are You Sure To Delete The Item')">Delete</button>
<button><a href="stdmain.php" class="btn btn-outline-dark">Back</a></button>
</form>
</div>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
	$reg=$_POST['reg'];
	$name=$_POST['name'];
	$con=mysqli_connect('localhost','root',null,'std1');
	$qry="Delete from std12 where reg='$reg' or name='$name'";
	if(mysqli_query($con,$qry))
	
		echo "<script>location.replace('shopmain.php')</script";
	else
		echo "Invalid Entry!";
}
?>
</body>