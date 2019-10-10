 <?php
if(isset($_POST['submit']))
{
	include('dbcon.php');

    $email=$_POST['email'];
	$pwd=$_POST['pwd'];

	$qry="select * from register where EMAIL='$email' and PWD='$pwd'";

	$run=mysqli_query($con,$qry); 

	if($run==true)
	{
		
		?>
		<script>
			alert('Successfully Logged In');
			document.write("hi user ");
		

		</script>
		<?php
		
	}else echo"bad";
	
}
?>