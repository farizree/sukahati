<?php
	include 'connect.php';	
	
	session_start();	
	$nama = $_POST['nama_mailus'];
	$phone = $_POST['phone_mailus'];
	$email = $_POST['email_mailus'];
	$subject = $_POST['subject_mailus'];
	$msg = $_POST['msg_mailus'];
	
	if(empty($nama))
	{
		die("'<script>alert(' nama masih kosong'); window.location = '../mailus.php'</script>'");		
	}
	else if(empty($phone))
	{
		die("'<script>alert('username masih kosong'); window.location = '../mailus.php'</script>'");
	}
	else if(empty($email))
	{
		die("'<script>alert('password masih kosong'); window.location = '../mailus.php'</script>'");
	}
		else if(empty($subject))
	{
		die("'<script>alert('username masih kosong'); window.location = '../mailus.php'</script>'");
	}
	else if(empty($msg))
	{
		die("'<script>alert('password masih kosong'); window.location = '../mailus.php'</script>'");
	}
	
	else
	{
		$input = mysqli_query($con,"INSERT INTO tbl_mailus (nama_mailus, phone_mailus, email_mailus, subject_mailus, msg_mailus) 
			  VALUES ('$nama','$phone','$email','$subject', '$msg')");
	
		if ($input)
		{
			die("'<script>alert('Terimakasih atas kritik & saran dari anda, semoga kami lebih baik lagi dalam pelayanan. :) '); window.location = '../mailus.php'</script>'");
		} else {
			echo "Terdapat Kesalahan, sihlakan hubungi Admin";
		}
	}
?>