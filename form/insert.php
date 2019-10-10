<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$fname=$_POST['fname'];

	$lname=$_POST['lname'];
	$ftname=$_POST['ftname'];
	$mtname=$_POST['mtname'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$pin=$_POST['pin'];
	$address=$_POST['address'];

	$qry="INSERT INTO register (FNAME, LNAME, FTNAME, MTNAME, CNO, EMAIL, PWD, CATEGORY, DOB, STATE, DISTRICT, PIN, ADDRESS) VALUES ('$fname','$lname','$ftname','$mtname','$cno','$email','$pwd','$gender','$dob','$state','$district','$pin','$address')";
	$run=mysqli_query($con,$qry);

	if($run==true)
	{
		
		?>
		<script>
			alert('Data Inserted Successfully');
			window.open('index.html','_self');

		</script>
		<?php
		
	}
	
}
?>