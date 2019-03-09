
<?php

	$con = mysqli_connect("worldofconcretepvtltd.com","woc_kishan","123456","woc_amphi_properties");
    // Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} 
        
	    $name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['comments'];

		if ($name && $email && $phone && $message) {
			$query="insert into contect_us (name,email,phone,message) values ('$name','$email','$phone','$message')";

			$sucess = mysqli_query($con,$query);

			if($sucess){
				echo "<span style='color:green; font-size: 14px;'>Thank you for writing to us we will get back to you soon</span>";
			}else{
				echo "<span style='color:red; font-size: 14px;'>Error in Insert Contect Form</span>";
			}
		}
	
	mysqli_close($con);

?>

