<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
crossorigin="anonymous">
<body style='background:powderblue'>
<h1 align='center' style='color:brown'>ADD NEW DATABASE OF STUDENT</h1><br>
</body>
</head>
<body>
<div class='container'>
<div class="card">
<div class="card-header" style='background-color:powderblue; color:red'>
<h3> <u>ADD INFORMATION</u> </h3>
</div>
<div class="card-body" style='background-color:lightgreen; color:blue'>
<form action='#' method='post'>
<div class="form-group">
<label>REG.NO: </label>
<input type='number' name='reg' class="form-control" required
placeholder='Enter The Reg.No: '>
<label>STUDENT NAME: </label>
<input type='text' name='name' class="form-control" required
placeholder='Enter The Name: '>
</div>
<div class="form-group">
<label>MARKS: </label>
<input type='number' name='mark' class="form-control" required
placeholder='Enter The Marks: '>
</div>
<div class="form-group">
<label>ATTENDENCE: </label>
<input type='number' name='att' class="form-control" required
placeholder='Enter The Attendence%: '>
</div>
<div class="form-group">
<label>COURSE: </label>
<input type='text' name='cou' class="form-control" required
placeholder='Enter The Course: '>
</div>
<button type="submit" name='submit' class="btn btn-outline-primary">Register</button>
<button><a href="stdmain.php" class="btn btn-outline-primary">Back</a></button>
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
	$qry="Insert into std12 values('$reg','$name','$mark','$att','$cou')";
	if(mysqli_query($con,$qry))
	
		echo "<script>location.replace('stdmain.php')</script";
	else
		echo "Invalid Entry!";
}
?>
</body>