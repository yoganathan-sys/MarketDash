<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao="
 crossorigin="anonymous"></script
</head>
<body style='background:powderblue'>
<h1 align='center' style='color:red'><u>STUDENT MANAGMENT SYSTEM</h1><u><br>
<p align='center' style='color:blue'><h5 align='center' style='color:green'>WHEN YOU CLICK H1(STUDENT MANAGMENT SYSTEM) THE TABLE SUDDENLY HIDE AGAIN
CLICK THE TABLE SHOW THE DASHBOARD</h5></P>
</body>
<div class="container mt-4">
    <div class="card">
        <div class="btn btn-outline-dark">
            <h2 class="text-center text-blue">
                WELCOME TO YOGA'S STUDENT MANAGMENT SYSTEM
            </h2>
            <div class="text-center">
                <a href="stdadd.php" class="btn btn-outline-success">
                    ADD NEW
                </a>
                <a href="stdup.php" class="btn btn-outline-primary">
                    UPDATE
                </a>
                <a href="stddel.php" class="btn btn-outline-danger">
                    DELETE
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr class="table-active">
                        <th>S.No</th>
						<th>Reg.No</th>
                        <th>Student Name</th>
                        <th>Marks</th>
                        <th>Attendence</th>
                        <th>Course</th>
                    </tr>
                </thead>
            <tbody>
			<?php
$con = mysqli_connect('localhost', 'root', '', 'std1');
$qry = "SELECT * FROM std12 ORDER BY reg ASC";
$res = mysqli_query($con, $qry);
$sno = 1;
while ($row = mysqli_fetch_assoc($res))
{
	$reg=$row['reg'];
    $name  = $row['name'];
    $mark  = $row['mark'];
    $att  = $row['att'];
    $cou = $row['cou'];
?>
<tr class="table-secondary">
    <td><?php echo $sno++; ?></td>
	<td><?php echo $reg;?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $mark; ?></td>
    <td><?php echo $att; ?></td>
    <td><?php echo $cou; ?></td>
</tr>
<?php
}
?>
<?
                mysqli_close($con);
                ?>
		</div>
<script>
$(document).ready(function(){
    $("h1").click(function(){
        $("table").toggle(3000)
		; 
    });
});
</script>