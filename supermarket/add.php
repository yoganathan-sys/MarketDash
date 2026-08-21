<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
crossorigin="anonymous">
</head>
<body>
<div class='container'>
<div class="card">
<div class="card-header" style='background-color:powderblue; color:red'>
<h3> <u>Add Information</u> </h3>
</div>
<div class="card-body" style='background-color:lightgreen; color:blue'>
<form action='#' method='post'>
<div class="form-group">
<label>Item Code: </label>
<input type='number' name='code' class="form-control" required
placeholder='Enter Item code: '>
</div>
<div class="form-group">
<label>Item Name: </label>
<input type='text' name='name' class="form-control" required
placeholder='Enter Item Name: '>
</div>
<div class="form-group">
<label>Item Rate: </label>
<input type='number' name='rate' class="form-control" required
placeholder='Enter Item Rate: '>
</div>
<div class="form-group">
<label>Item Stock: </label>
<input type='number' name='stock' class="form-control" required
placeholder='Enter Item Stock: '>
</div>
<button type="submit" name='submit' class="btn btnwarning">Register</button>
<button><a href="Supermain.php" class="btn btnwarning">Back</a></button>
</form>
</div>
</div>
</div>
<?php
if(isset($_POST['submit']))
{
	$code=$_POST['code'];
	$name=$_POST['name'];
	$rate=$_POST['rate'];
	$stock=$_POST['stock'];
	$con=mysqli_connect('localhost','root',null,'pro1');
	$qry="Insert into pro11 values('$code','$name','$rate','$stock')";
	if(mysqli_query($con,$qry))
	
		echo "<script>location.replace('shopmain.php')</script";
	else
		echo "Invalid Entry!";
}
?>
</body>