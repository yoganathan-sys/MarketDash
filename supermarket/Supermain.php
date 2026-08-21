<head>
    <title>Yoga's Super Market</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>

<body>

<div class="container mt-4">

    <div class="card">

        <!-- Header -->
        <div class="card-header bg-danger">

            <h2 class="text-center text-white">
                WELCOME TO YOGA'S SUPER MARKET
            </h2>

            <div class="text-center">

                <a href="add.php" class="btn btn-primary">
                    ADD NEW
                </a>

                <a href="update.php" class="btn btn-secondary">
                    UPDATE
                </a>

                <a href="del.php" class="btn btn-warning">
                    DELETE
                </a>

            </div>

        </div>

        <!-- Body -->
        <div class="card-body">

            <table class="table table-hover table-bordered text-center">

                <thead>
                    <tr class="table-active">

                        <th>S.No</th>
                        <th>Item Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>

                    </tr>
                </thead>

                <tbody>
				<?php
$con = mysqli_connect('localhost', 'root', '', 'pro1');
$qry = "SELECT * FROM pro11 ORDER BY code ASC";
$res = mysqli_query($con, $qry);
$sno = 1;
while ($row = mysqli_fetch_assoc($res))
{
    $code  = $row['code'];
    $name  = $row['name'];
    $rate  = $row['rate'];
    $stock = $row['stock'];
?>
<tr class="table-secondary">
    <td><?php echo $sno++; ?></td>
    <td><?php echo $code; ?></td>
    <td><?php echo $name; ?></td>
    <td>₹<?php echo $rate; ?></td>
    <td><?php echo $stock; ?></td>
</tr>
<?php
}
?>
<?
                mysqli_close($con);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>