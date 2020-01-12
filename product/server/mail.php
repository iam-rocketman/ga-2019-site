<?php
$to = 'ajithkumar014397@gmail.com'; 
$from = 'ajithkumar014397@gmail.com'; 
$fromName = 'Gamasome'; 
 
$subject = "We will met you soon"; 
 
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

?>