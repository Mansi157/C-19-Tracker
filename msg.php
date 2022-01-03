<head>
    Hello, Welcome to Reminder! If you already have an account please continue. If not,
	<a href="new_user.pdf">Click here.</a>
</head>
<body>
	
    <form action="msg.php" method="post">
    Account id: <input type="text" name="sid" required><br>
	Account token: <input type="text" name="token" required><br>
	Twilio Number(Format: +12XXXXXXXXXX): <input type="tel" name="sender" pattern="[+][0-9]{11}" required><br>
    Patient's Number(Format: +91XXXXXXXXXX): <input type="tel" name="phone" pattern="[+][0-9]{12}" required><br>
    <input type="submit" name="submit">
    </form>
</body>
<?php
	require __DIR__ . '\twilio-php-main\src\Twilio\autoload.php';
	use Twilio\Rest\Client;
	if($_POST)
	{
		$account_sid = $_POST['sid'];
		$auth_token = $_POST['token'];
		$twilio_number = $_POST['sender'];
		$number = $_POST['phone'];
		$client = new Client($account_sid, $auth_token);
		try
		{
			$full = $client->messages->create(
				$number,
				array(
					'from' => $twilio_number,
					'body' => 'This is the reminder for you to take medicine.'
				)
			);
		if($full->status == 'queued')
			echo '<script>alert("SMS sent successfully")</script>';
		}
		catch(Exception $ex)
		{
			echo '<script>alert("Error! Entered credential may be wrong or the patient\'s number may not have been verified.")</script>';
		}
	}
?>