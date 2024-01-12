   <?php 
  
if($_POST)
{
    $ToEmail = 'admission@adrianloyalschool.com'; 
    $EmailSubject = 'Adrian Admission Mail'; 
    $mailheader = "From: ".$_POST["name1"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $header = "admission@adrianloyalschool.com \r\n";
    
    $MESSAGE_BODY .= "Name of the Child: ".$_POST["name"]."<br>";

  
    $MESSAGE_BODY .= " Gender M / F: ".$_POST["gender"]."<br>";
  
    $MESSAGE_BODY .= " Mobile Number: ".$_POST["mobile"]."<br>";
    
  
    $MESSAGE_BODY .= "Your Message: ".nl2br($_POST["message"])."<br>";
  
  
     
$retval =    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 


   
   
   if( $retval == true )  
   {
      //echo "Message sent successfully...";
	  
	  echo("  <script>   alert('Message sent successfully...');      </script> ");
 echo ("<script>     window.location = 'index.html';     </script>");
	  
	  
	  
	  //header("Location: http://www.nvronlifescience.com/thankyou.html");
   }
   else
   {
     // echo "Message could not be sent...";
	  
	  
	  echo("  <script>   alert('Message couldnot be sent...');      </script> ");
 echo ("<script>     window.location = 'index.html';     </script>");
   
   }
   }

?> 

 

   
   
   
    <?php
	/*
	if ($_POST)
	{
	
   $to = "info@nvronlifescience.com";
   $subject = "Nvron Contact Us";
   $message1 = "The following user can contact with nvron comtact page .";
   $header = "From:info@nvronlifescience.com \r\n";
   $fn1=$_POST['fn'];
   
  
    $ln1=$_POST['ln'];
	 $email1=$_POST['email'];
	  $message12=$_POST['message'];
   $retval = mail ($to,$subject,$message1,$header,$fn1,$ln1,$email1,$message12);
   
   
   if( $retval == true )  
   {
      //echo "Message sent successfully...";
	  
	  echo("  <script>   alert('Message sent successfully...');      </script> ");
 echo ("<script>     window.location = 'contact-us.html';     </script>");
	  
	  
	  
	  //header("Location: http://www.nvronlifescience.com/thankyou.html");
   }
   else
   {
     // echo "Message could not be sent...";
	  
	  
	  echo("  <script>   alert('Message couldnot be sent...');      </script> ");
 echo ("<script>     window.location = 'contact-us.html';     </script>");
   
   }
   }*/
  
?>
