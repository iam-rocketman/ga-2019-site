<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass  = 'OpenPassword@123'; 
 $dbname = 'gamasome_db';

 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } else echo"connected";

 echo $conn->host_info."\n";


 

if(!empty($_POST['supply_contact']))
{
  $name= $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
 
   $date = date('Y-m-d H:i:s');
   $product = "smart supply";
  

   $sql = "INSERT INTO contact_entry(name, email, phone, subject, message, product, date_reg) VALUES('$name', '$email','$phone','$subject','$message','$product', '$date')";
   if ($conn->query($sql)) {
      echo "Regitser successfully";
      //echo "New record created successfully";
      echo '<script type="text/javascript">'; 
  //	echo 'alert("Thank you for register. catch you soon :)");'; 
      echo 'window.location.href = "../smart-supply.html";';
      echo '</script>';
  }
  else {
    echo $conn->error;
}
}

if(!empty($_POST['gig_contact']))
{
  $name= $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
 
   $date = date('Y-m-d H:i:s');
   $product = "smart gig";
  

   $sql = "INSERT INTO contact_entry(name, email, phone, subject, message, product, date_reg) VALUES('$name', '$email','$phone','$subject','$message','$product', '$date')";
   if ($conn->query($sql)) {
      echo "Regitser successfully";
      //echo "New record created successfully";
      echo '<script type="text/javascript">'; 
  //	echo 'alert("Thank you for register. catch you soon :)");'; 
      echo 'window.location.href = "../smart-gig.html";';
      echo '</script>';
  }
  else {
    echo $conn->error;
}
}
 $conn->close();

?>
