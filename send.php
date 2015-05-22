<?php
if(isset($_POST['submit'])) {

    $to = "cartwright.chris7@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $subject = "CTC Contact";
    $message = $first_name . " " . $last_name . ": " . "\n\n" . $_POST['message'];

    $header = "From: " . $from;

    mail($to, $subject, $message, $header);

    header("Location: ./?action=contact");
}
?>
