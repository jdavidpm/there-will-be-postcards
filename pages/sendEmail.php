<?php
   // data sent in header are in JSON format
   header('Content-Type: application/json');
   // takes the value from variables and Post the data
   $name = "prueba";//$_POST['name'];
   $email = "prueba";//$_POST['email'];
   $contact = "prueba";//$_POST['contact'];
   $postmessage = "prueba";//$_POST['message'];  
   $to = "jdavidpm.undonedreams@gmail.com";
   $subject = "Contact Us";
   $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $message = "prueba";
 
   $retval = mail ($to,$subject,$message,$headers);
   // message Notification
   if( $retval == true ) {
      echo json_encode(array(
         'success'=> true,
         'message' => 'Message sent successfully'
      ));
   }else {
      echo json_encode(array(
         'error'=> true,
         'message' => 'Error sending message'
      ));
   }
?>