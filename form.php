<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $question1 = $_POST['question1'];
  $question2 = $_POST['question2'];

  $message = "Name: " . $name . "\n";
  $message .= "Quiz Answers:\n";
  $message .= "Question 1: " . $question1 . "\n";
  $message .= "Question 2: " . $question2 . "\n";

  $to = "mongolian_monsta@gmail.com";
  $subject = "Multiple Choice Quiz Results";
  $headers = "From: noreply@yourwebsite.com"; // Replace with your website domain

  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for submitting your answers!";
  } else {
    echo "Error sending email.";
  }
}
