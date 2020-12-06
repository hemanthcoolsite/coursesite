<?php
$to = $_POST["email"];
$mobile=$_POST["mobile"];
$course=$_POST["course"];
$slot=$_POST["slot"];
$child=$_POST["child"];
$parant=$_POST["parant"];
$subject = "NotchUp trial class Booked successfully";
$body = "Dear $parant <br>$child 's  class at $slot<br>has been successfully booked.<br>thanks&Regards.,<br>NotchUp Team(Hemantha k)";
$headers = "From: hemanthkrish99@gamil.com";
echo "$to,$mobile,$course,$slot,$child,$parant"
if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent to $to";
} else {
    echo "Email sending failed...";
}