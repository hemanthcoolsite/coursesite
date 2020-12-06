<?php
$to = $_POST["email"];
$mobile=$_POST["mobile"];
$course=$_POST["course"];
$slot=$_POST["slot"];
$child=$_POST["child"];
$parant=$_POST["parant"];
$subject = "NotchUp trial class Booked successfully";
$body = "Dear $parant\n$child 's  class at $slot\nhas been successfully booked.\n\n\n\nThanks&Regards.,\n\nNotchUp Team(Hemantha k)";
$headers = "From: hemanthkrish99@gamil.com";
if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent to $to";
} else {
    echo "Email sending failed...";

}