<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
crossorigin="anonymous">
</head>
<body style='background:powderblue'>
<h1 align='center' style='color:red'>UPDATE STUDENT DETAILS</h1>
</body>
<body>
<div class='container'>
<div class="card">
<div class="card-header" style='background-color:red; color:yellow'>
<h3> <u>UPDATE DETAILS</u> </h3>
</div>
<div class="card-body" style='background-color:orange; color:blue'>
<form action='#' method='post'>
<div class="form-group">
<label>REG.NO:</label>
<input type='number' name='reg' class="form-control" required
placeholder='Enter The Reg.No: '>
</div>
<div class="form-group">
<label>NAME:</label>
<input type='text' name='name' class="form-control" required
placeholder='Enter The Name: '>
</div>
<div class="form-group">
<label>MARK</label>
<input type='number' name='mark' class="form-control" required
placeholder='Enter The Mark: '>
</div>
<div class="form-group">
<label>ATTENDENCE: </label>
<input type='number' name='att' class="form-control" required
placeholder='Enter The Attendence: '>
</div>
<div class="form-group">
<label>COURSE </label>
<input type='text' name='cou' class="form-control" required
placeholder='Enter The Course: '>
</div>
<button type="submit" name='submit' class="btn btn-outline-info">Update</button>
<button><a href="stdmain.php" class="btn btn-outline-info">Back</a></button>
</form>
</div>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
	$reg=$_POST['reg'];
	$name=$_POST['name'];
	$mark=$_POST['mark'];
	$att=$_POST['att'];
	$cou=$_POST['cou'];
	$con=mysqli_connect('localhost','root',null,'std1');
	$qry="Update std12 set cou='$cou', name='$name',mark='$mark',att='$att' where reg='$reg'";
	if(mysqli_query($con,$qry))
	
		echo "<script>location.replace('stdmain.php')</script";
	else
		echo "Invalid Entry!";
	mysqli_close($con);
}
?>
</body>