<?php
session_start();

$nama= $_POST['nama'];
$nim= $_POST['nim'];
$pesan= $_POST['pesan'];
$subject= $_POST['subject'];
$usermail= $_POST['usermail'];
$body= "
Nama : $nama <br/>
Nim : $nim <br/>
Email: $usermail <br/>
Pesan : $pesan <br/>


";

function Send_Mail($to,$subject,$body)
{
	
	require 'PHPmailer/class.phpmailer.php';

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Host= 'alumnijpte.ptik.ft.unm.ac.id';
$mail->SMTPSecure = 'tls';
$mail->Port = 465; 
$mail->SetFrom("admin@alumnijpte.ptik.ft.unm.ac.id","email sender");
$mail->Username = "admin@alumnijpte.ptik.ft.unm.ac.id";// username gmail yang akan digunakan untuk mengirim email
$mail->Password = "alumni456";  // Password email
$mail->SetFrom($usermail, 'SiAlumni JPTE FT UNM');
$mail->AddReplyTo($usermail,'SiAlumni JPTE FT UNM');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
	return false;
else
	return true;
}

$to = "admin@alumnijpte.ptik.ft.unm.ac.id"; //email tujuan
$subject = "$subject"; // subject email
Send_Mail($to,$subject,$body);

$_SESSION['pesan'] = 'email telah terkirim';
header("location:kontak-dan-saran");
// echo '<script>window.location=""</script>';
// echo"<br/><br/><center><h3>email telah terkirim</h3></center>"; 
?>