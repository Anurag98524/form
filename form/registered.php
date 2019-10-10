<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Students Registered</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
        <th>Category</th>
        <th>Dob</th>
        <th>State</th>
        <th>District</th>
        <th>Pin</th>  
        <th>Address</th>
      </tr>
    </thead>

    <?php


	include('dbcon.php');
	$qry="select * from register ";
	$run=mysqli_query($con,$qry);

	if(mysqli_num_rows($run)>0)
	{
		?>
		<tbody>

		<?php
         while($res=mysqli_fetch_array($run))
         {
     ?>
         <tr>
        <td><?php echo $res['FNAME'];?></td>
        <td><?php echo $res['LNAME'];?></td>
        <td><?php echo $res['FTNAME'];?></td>
        <td><?php echo $res['MTNAME'];?></td>
        <td><?php echo $res['CNO'];?></td>
        <td><?php echo $res['EMAIL'];?></td>
        <td><?php echo $res['PWD'];?></td>
        <td><?php echo $res['CATEGORY'];?></td>
        <td><?php echo $res['DOB'];?></td>
        <td><?php echo $res['STATE'];?></td>
        <td><?php echo $res['DISTRICT'];?></td>
        <td><?php echo $res['PIN'];?></td>
        <td><?php echo $res['ADDRESS'];?></td>

      </tr>
<?php
         	
	}}
	else{
		?>
		<script> alert("No Student Found.")</script>
		<?php
	}
	?>



    </tbody>
  </table>
</div>

</body>
</html>





