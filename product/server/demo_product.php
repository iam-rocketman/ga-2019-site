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


 
$email = $_POST['email'];

$to = $email; 
$from = 'contact@gamasome.com'; 
$fromName = 'Gamasome'; 
 
$subject = "Our team will contact you soon"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Gamasome</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>gamasome</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>contact@gamasome.com</td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="https://www.gamasome.com">www.gamasome.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: invin.ajay@gmail.com' . "\r\n"; 
$headers .= 'Bcc: ajithkumar014397@gamil.com' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}

if(!empty($_POST['submit-supply']))
{
  
  $email = $_POST['email'];
   
   $date = date('Y-m-d H:i:s');
   $product = "smart supply";
  

   $sql = "INSERT INTO email_entry(email, product, date_reg) VALUES('$email', '$product', '$date')";
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

if($_POST['product_entry']){

    $name= $_POST['name'];
    $email = $_POST['email'];
     
     $date = date('Y-m-d H:i:s');
     $product = "smart supply";
    

     $sql = "INSERT INTO product_entry(`name`, email, product, data_reg) VALUES('$name','$email', '$product', '$date')";
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

if($_POST['product_entry_gig']){

    $name= $_POST['name'];
    $email = $_POST['email'];
     
     $date = date('Y-m-d H:i:s');
     $product = "smart gig";
    

     $sql = "INSERT INTO product_entry(`name`, email, product, data_reg) VALUES('$name','$email', '$product', '$date')";
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

if($_POST['demo_submit']){
    $email = $_POST['email'];
     
     $date = date('Y-m-d H:i:s');
     $product = "smart gig";
    

     $sql = "INSERT INTO email_entry(email, product, date_reg) VALUES('$email', '$product', '$date')";
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
