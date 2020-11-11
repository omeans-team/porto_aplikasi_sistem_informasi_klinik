<?php
ob_start();
session_start();
include('../../assets/config/config.php');
	$usname		= mysqli_real_escape_string($db, $_POST['uname/email']);
	$password		= mysqli_real_escape_string($db, $_POST['password']);
	$op 			= $_GET['op'];

	if($op=="in"){
		$sql = mysqli_query($db, "SELECT * FROM pengguna WHERE (uname='$usname' or email='$usname') AND password='$password'");
		if(mysqli_num_rows($sql)==1){
			$qry = mysqli_fetch_array($sql);
			$_SESSION['id']	= $qry['id'];
			$_SESSION['email']	= $qry['email'];
			$_SESSION['uname']	= $qry['uname'];
			$_SESSION['level']	= $qry['level'];
			
			if($qry['level']=="administrator"){header("Location: ../admin");}
			if($qry['level']=="dokter"){header("Location: ../dokter");}
			if($qry['level']=="pegawai"){header("Location: ../pegawai");}
			if($qry['level']=="pasien"){header("Location: ../pasien");}
			
		}
		else{
			?>
			<script language="JavaScript">
				alert('Oops! Login Failed. Username & password tidak sesuai ...');
				document.location='./';
			</script>
			<?php
		}
	}
	else if($op=="out"){
		unset($_SESSION['uname']);
		unset($_SESSION['email']);
		unset($_SESSION['level']);
		header("location:./");
	}
?>