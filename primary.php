<?php
$to = $_POST["email"];
$mobile=$_POST["mobile"];
$subject = "Re:FeedBack from NotchUpcourse";
$body = "Hai sir thank for your valuable comment<br>Regards<br>NotchUp team(Hemantha k).....";
$headers = "From: hemanthkrish99@gamil.com";

if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent to $to";
} else {
    echo "Email sending failed...";
}