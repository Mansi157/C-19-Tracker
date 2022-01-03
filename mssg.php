<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

html body {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #91b9f8;
  margin: auto;
}
html body .container {
  max-width: 1200px;
  width: 85vw;
  height: 80vh;
  display: grid;
  grid-template-columns: 1fr;
}
html body .container h2 {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #163568;
  text-align: center;
  margin-bottom: 10px;
}
html body .container h2 span {
  color: #efefef;
  padding-right: 5px;
}
html body .container .box {
  display: grid;
  box-shadow: 0px 0px 10px #000;
}
html body .container .box .info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #61b1f3;
  color: #163568;
}
html body .container .box .info h4 {
  margin: 10px 0;
}
html body .container .box .info p {
  margin: 5px 0px;
}
html body .container .box .info p:nth-child(4) {
  margin-bottom: 20px;
}
html body .container .box h3 {
  background: #efefef;
  padding: 10px;
}
html body .container .box form {
  width: 100%;
  display: grid;
  background: #efefef;
  padding: 10px 10px;
}
html body .container .box form .name,
html body .container .box form .company,
html body .container .box form .email,
html body .container .box form .tele {
  margin-bottom: 20px;
}
html body .container .box form .name label,
html body .container .box form .company label,
html body .container .box form .email label,
html body .container .box form .tele label {
  font-size: 14px;
  opacity: 0.9;
}
html body .container .box form .name input,
html body .container .box form .company input,
html body .container .box form .email input,
html body .container .box form .tele input {
  padding: 5px;
  outline: none;
  border: 1px solid #61b1f3;
  width: 95%;
  height: 60%;
}
html body .container .box form .message {
  grid-column: 1/3;
}
html body .container .box form .message label {
  font-size: 14px;
  opacity: 0.9;
}
html body .container .box form .message #message {
  height: 90px;
  width: 100%;
  padding: 5px;
  outline: none;
  border: 1px solid #61b1f3;
}
html body .container .box form .submit {
  grid-column: 1/3;
}
html body .container .box form .submit input[type=submit] {
  cursor: pointer;
  background: #61b1f3;
  letter-spacing: 0.2em;
  padding: 10px;
  outline: none;
  border: none;
  border-radius: 5px;
  display: block;
  max-width: 80%;
  width: 50%;
  margin: auto;
  text-align: center;
  transition: 0.3s linear;
  font-weight: bold;
}
html body .container .box form .submit input[type=submit]:hover, html body .container .box form .submit input[type=submit]:focus {
  color: #efefef;
  background: #163568;
}
@media (min-width: 700px) {
  html body .container h2 {
    justify-content: flex-start;
    align-items: flex-end;
    font-size: 2em;
  }
  html body .container .box {
    grid-template-columns: 1fr 2fr;
  }
  html body .container .box .info {
    grid-row: 1/3;
    font-size: 1.2em;
  }
}

.col{
  background-color: #064747;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #163568;;
}
}
</style>
</head>
<body>
<main class="container" style="margin-top: 2px;">
        <h2><span>Medicine </span> Reminder</h2>
        <!-- Box -->
        <div class="box">
            <!-- info container -->
            <section class="info">
                <h4>Twilio Number</h4>
                <p>
                    <i class="fas fa-road"></i>
                     <small>(Format: +12XXXXXXXXXX):</small>
                </p>
                <h4>Patient's Number</h4>
                <p>
                    <i class="fas fa-phone-alt"></i>
                    <small>(Format: +91XXXXXXXXXX):</small>
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    <p style="text-align: center;">If you are a new user, we recommend you read the instructions first.</p>
                    <a href="https://mansi157.github.io/pdf/new_user.pdf" target="_blank" class="col">Read Here</a>
                    

                </p>
            </section>
            <!-- form container -->
            <h3>SMS Reminder</h3>
            <form action="mssg.php" method="post">
                <!-- Name -->
                <div class="name">
                    <label for="name">Account Id</label>
                    <br>
                    <input type="text" id="name" name="sid" required>
                </div>
                <!-- Company -->
                <div class="company">
                    <label for="company">Account Token</label>
                    <br>
                    <input type="text" id="company" name="token" required>
                </div>
                <!-- Email -->
                <div class="email">
                    <label for="telephone">Twilio Number</label>
                    <br>
                    <input type="tel" id="telephone" name="sender" pattern="[+][0-9]{11}" required>
                </div>
                <!-- Telephone -->
                <div class="tele">
                    <label for="telephone">Patient's Number</label>
                    <br>
                    <input type="tel" id="telephone" name="phone" pattern="[+][0-9]{12}" required>
                </div>
               
                <!-- Submit -->
                <div class="submit" name="submit">
                    <input type="submit" name="submit" value="SUBMIT">
                </div>
            </form>
        </div>
    </main>
    
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
    </body>
    </html>
   
