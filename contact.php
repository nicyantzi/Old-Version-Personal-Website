<?php
$field_name = $_POST['contact_name'];
$field_email = $_POST['contact_email'];
$field_message = $_POST['contact_message'];

$mail_to = 'nic.yantzi@me.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for contacting me. I will return your email as soon as I can.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please try again.');
		window.location = 'contact.html';
	</script>
<?php
}
?>