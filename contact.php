<?php
if(isset($_POST['submit'])){
    $to = "suraj.paul.69@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $heading = $_POST['heading'];
    $subject = "New Query from Your Website | Suraj Paul";
    $subject2 = "Thanks for contacting Suraj paul";
    $message = "Name = " . $first_name . "\nSubject = " . $heading . "\nwrote the following:" . " " . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    header('Location:https://surajpaul.github.io/portfolio/thank-you.html');
    }
?>