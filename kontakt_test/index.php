<?php
    require 'phpmailer/PHPMailerAutoload.php';

    //we need to create an instance of PHPMailer
    $mail = new PHPMailer();

    //set where we are sending email
    $mail->addAddress('seba269h@edu.easj.dk', 'Sebastian Hein');

    //set who is sending an email
    $mail->setFrom('Sebastian', 'Admin at MYOB');

    //set subject
    $mail->Subject = "Test email!";

    //type of email
    $mail->isHTML(true);

    //write email
    $mail->Body = "<p>this is our email body</p><br><br><a href='http://google.com'>Google</a>";

    // //include attachment
    // $mail->addAttachment('fbcover.png', 'Facebook cover.png');

    //send an email
    if (!$mail->send())
        echo "Something wrong happened!";
    else
        echo "Mail sent";
?>

<html>
    <head>
        <title>contact form test</title>
    </head>
    <body>
        <form method="post" action="index.php" enctype="multiform/form-data">
            <input type="text" name="username" placeholder="Name..." required><br>
            <input type="email" name="email" placeholder="Email..." required><br>
            <textarea name="body" placeholder="Message..." required></textarea><br>
            <!-- <input type="file" name="attachment"><br> -->
            <input type="submit" name="submit" value="send email">
        </form>
    </body>
</html>
