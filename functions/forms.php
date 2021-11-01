<?php
if (isset($_POST['manager'])) {

  $name = clearString($_POST['name'] ?? null);
  $email = clearString($_POST['email'] ?? null);
  $message = clearString($_POST['message'] ?? null);

  if (empty($name) || empty($email) || empty($message)) :
    setMessage('All fields is required', 'danger');
  else :
    $to = 'kudriashova.ag@gmail.com';
    $subject = 'Mail from site';
    $mess = "From: $name, Email: $email, Message: $message";

    if (mail($to, $subject, $mess)) {
      setMessage('Thank, ' . $name);
    } else {
      setMessage('Sorry, try later', 'danger');
    }
  endif;
  redirect('contacts');
}
