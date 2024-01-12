   <?php 
  
if($_POST)
{
    $ToEmail = 'admission@adrianloyalschool.com'; 
    $EmailSubject = 'Adrian Enquiry Mail'; 
    $mailheader = "From: ".$_POST["name1"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $header = "admission@adrianloyalschool.com \r\n";
    
    $MESSAGE_BODY .= "Name of the Child: ".$_POST["name"]."<br>";

    $MESSAGE_BODY .= "D.O.B ".$_POST["date"]."<br>";
     $MESSAGE_BODY .= "Age: ".$_POST["age"]."<br>";
      $MESSAGE_BODY .= "Gender: ".$_POST["gender"]."<br>";
    $MESSAGE_BODY .= "Admission: ".$_POST["admission"]."<br>";
    
     $MESSAGE_BODY .= "Father's Name: ".$_POST["fathername"]."<br>";
     $MESSAGE_BODY .= "Mobile: ".$_POST["mobile1"]."<br>";
      $MESSAGE_BODY .= "Father Occupation: ".$_POST["occupation1"]."<br>";
      
       $MESSAGE_BODY .= "Mother's Name: ".$_POST["mothername"]."<br>";
     $MESSAGE_BODY .= "Mobile: ".$_POST["mobile2"]."<br>";
      $MESSAGE_BODY .= "Mother Occupation: ".$_POST["occupation2"]."<br>";
    
    
    
    $MESSAGE_BODY .= "Address: ".nl2br($_POST["message"])."<br>";
     $MESSAGE_BODY .= "Your Expectation from school: ".nl2br($_POST["expect"])."<br>";
$retval =    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 


   
   
   if( $retval == true )  
   {
      //echo "Message sent successfully...";
	  
	  echo("  <script>   alert('Message sent successfully...');      </script> ");
 echo ("<script>     window.location = 'contact.html';     </script>");
	  
	  
	  
	  //header("Location: http://www.nvronlifescience.com/thankyou.html");
   }
   else
   {
     // echo "Message could not be sent...";
	  
	  
	  echo("  <script>   alert('Message couldnot be sent...');      </script> ");
 echo ("<script>     window.location = 'contact.html';     </script>");
   
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
