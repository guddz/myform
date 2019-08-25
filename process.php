<?php
require_once "config.php"
?>
<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	$query = mysqli_query($conn,"insert into data(name,email,phone,address,message)
	value('$name','$email','$phone','$address','$message')");
	if($query)
	{
echo "<script>alert('Data inserted successfully');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
header("Location: http://localhost/myform/");

}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

$msg = '';


if (array_key_exists('email', $_POST)) {


require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';

 $mail = new PHPMailer;


    $mail->isSMTP();                                            // Set mailer to use SMTP

    $mail->Host       = 'mocha3028.mochahost.com;mail.thesisguide.in';  // Specify main and backup SMTP servers

    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

    $mail->Username   = 'info@thesisguide.in';                     // SMTP username

    $mail->Password   = 'GiHTTqfaYwjm';                               // SMTP password

    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted

    $mail->Port       = 465;                                    

    $mail->setFrom('info@thesisguide.in', 'Admin');
    
	$mail->addAddress($_POST['email'], $_POST['name']);
    
	if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {

        $mail->Subject = $_POST['msg_subject'];
	    
		$mail->isHTML(false);
		
		$mail->Body = <<<EOT

Email: {$_POST['email']}

Name: {$_POST['name']}

Message: {$_POST['message']}

EOT;

if (!$mail->send()) {

            //The reason for failing to send will be in $mail->ErrorInfo

            //but you shouldn't display errors to users - process the error, log it on your server.

            $msg = 'Sorry, something went wrong. Please try again later.';

        } else {

          
echo "<script>alert('Thank You For Your Message.We Will Be In Touch With You Shortly.');</script>"; 

        }

    } else {

        $msg = 'Invalid email address, message ignored.';

    }

}

?>
<?php if (!empty($msg)) {

    echo "<h2>$msg</h2>";

} ?>
		