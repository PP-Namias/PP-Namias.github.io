<?php 

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "pp_namias@programmer.net";
  $headers = "From: ".$email;
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>