<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'email';
$to = 'bbrock@freshhospitality.net';
$subject = 'From the contact page form';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
	if (mail ($to, $subject, $body, $from)) {
		echo '

		Thanks for contacting us! We will get back to you really soon. Until then, stay cool...pun intended

		';
	} else {
		echo '

		Oops! An error occurred. Try sending your message again.

		';
	}
}
?>
