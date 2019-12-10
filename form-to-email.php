<?php
if (!isset($_POST['submit']))
{
    echo "Please complete the form";
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Validate form
if(empty($name))
{
    echo "Please fill in your name";
    exit;
}
else if(empty($email))
{
    echo "Please fill in your email";
    exit;
}
else if(empty($subject))
{
    echo "Please put in a subject";
    exit;
}
else if(empty($message))
{
    echo "Please put in a message";
    exit;
}

$email_from = 'sfking1@gmail.com';
$email_subject = "New Form Submission";
$email_body = "You have received a new message from $name.\n"."email address: $email \n"."Message: \n $message";

$email_to = "sfking1@gmail.com";
$headers = "From: $email_from \r\n";

mail($email_to,$email_subject,$email_body,$headers);
?>