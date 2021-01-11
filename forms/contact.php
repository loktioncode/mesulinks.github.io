<?php
 
  $receiving_email_address = 'mesulink@gmail.com';

  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'mesulinkdynamics.co.za',
    'username' => 'webmaster@mesulinkdynamics.co.za',
    'password' => 'P=h_BR^7JJh-',
    'port' => '587'
  );


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
