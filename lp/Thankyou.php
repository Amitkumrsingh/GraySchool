
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thank You</title>
   <link rel="shortcut icon" href="http://www.grayschool.in/images/favicon.png" type="image/x-icon">
         <link rel="icon" href="http://www.grayschool.in/images/fevicon.png" type="image/x-icon">
   

</head>
<body>


<?php
error_reporting(0);
	function send_mail($fromname, $fromaddress, $toname, $toaddress, $subject, $message,$cc)
	{
	   $headers  = "MIME-Version: 1.0\n";
	   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 $headers .= "X-Priority: 3\n";
	   $headers .= "X-MSMail-Priority: Normal\n";
	   $headers .= "X-Mailer: php\n"; 
	 
//$headers->AddAttachment( $file_to_attach , 'aboutus.jpg' );

	   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
	   if($cc != '') {	 
			 $headers .= "Cc:".$cc."\r\n";
		  }
	   
	   mail($toaddress, $subject, $message, $headers);
	}
	
	if(!empty($_POST['email']))
	{
			$fromname = $_POST['name'];
		$fromaddress = $_POST['email'];
		$email = $_POST['email'];
		$toname = 'Grayschool';
		
		
		  

		 $toaddress = "grayhschoolbranding@gmail.com"; 
		  
		$cc = '';
		$subject = 'Contact Details from CLAT LANDING PAGE';
		$message = '<html><body><fieldset style="border-color: #FF0000"><form><table  align="center" cellpadding="0" cellspacing="5" bordercolor="#FFFFFF">
<tr align="center">
 <td colspan="2" align="center" valign="top" style="color:#FF0000"><U><strong>Contact Details from NATA LANDING PAGE</strong></U></td>
  </tr>					  <tr > 
						<td width="256" align="left" valign="top"><div align="right"><strong>Name 
							: </strong></div></td>
						<td align="left" valign="top" width="259">
						  '.$_POST['name'].'
						  </td>
					  </tr>
					
					  <tr> 
						<td align="left" valign="top"><div align="right"><strong>Email: 
							</strong></div></td>
						<td align="left" valign="top" width="259"> 
						  '.$_POST['email'].'
						 </td>
					  </tr>
					    <tr> 
						<td align="left" valign="top"><div align="right"><strong>Phone:</strong></div></td>
						<td align="left" valign="top" width="259"> 
						  '.$_POST['phone'].'
						  </td>
					  </tr>
					    <tr> 
						<td align="left" valign="top"><div align="right"><strong>Course:</strong></div></td>
						<td align="left" valign="top" width="259">'.$_POST['course'].' 
						</td>
					  </tr>
					  <tr> 
						<td align="left" valign="top"><div align="right"><strong>Message:</strong></div></td>
						<td align="left" valign="top" width="259">'.$_POST['message'].' 
						</td>
					  </tr>
					  <tr> 
						<td align="left" valign="top"></td>
						<td align="left" valign="top" width="259"></td>
					  </tr>
					</table></form></fieldset></body></html>';
		send_mail($fromname, $fromaddress, $toname, $toaddress, $subject, $message, $cc);
		?>
		
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<style>
		    
		    
		     @media all and (max-width:500px) 
   {
    
    .box
    {
        width:100% !important;
        
    }
       
   }
		    .social-icon-one {
    position: relative;
    padding-bottom: 10px;
}

.social-icon-one li {
    position: relative;
    margin-right: 15px;
    display: inline-block;
}
 
.social-icon-one li a {
    position: relative;
    font-size: 16px;
    color: #ffffff;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
}

.social {
    border: 2px solid #f1a01b;
    height: 38px;
    width: 38px;
    border-radius: 50%;
    line-height: 36px;
    text-align: center;
    color: #808080;
    font-size: 18px;
}

.fa-twitter {
    background: #1da1f2!important;
    color: white!important;
}

.fa-linkedin {
    background: #0274b3!important;
    color: white!important;
}

.fa-facebook-f {
    background: #3B5998!important;
    color: white!important;
}
.fa-instagram {
    background: #d12e79!important;
    color: white!important;
}
.box
{
        box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.20);
    background: #fff;
    width: 40%;
    margin-bottom: 6px;
    padding: 36px 25px 12px;
    margin: 80px 0px;
    clear: left;
    border-bottom: 1px solid #f0f0f0;
}
body

{
    
    background:#eee;
}

h2
{
    
        color: #3b5898;
    font-size: 40px;
    font-weight:bold;
}
h1
{
    color: #777;
    font-size: 50px;
    font-weight:bold;  
    
}
 
.sub
{
    
          color: #31708f;
    font-size: 25px;
    font-weight: bold;
}
	
	.back
	{
	    font-size: 20px;
	}</style>
 
 <center>
     
     <br><br>
     <div class="box">
     <img src="right.png" style="width: 12%;"><br>
      <h2>Thank You</h2>
      <h1>Get in Touch With Us</h1>
      
      <p class="sub">We have received your details. Our team will get in touch with you shortly.</p>
      <br>
     <ul class="social-icon-one">
                                    <li><a href="https://www.facebook.com/Gray-School-257973271562743/?" target="_blank"><span class="fa fa-facebook-f social"></span></a></li>
                                    <li><a href="https://twitter.com/SchoolGray" target="_blank"><span class="fa fa-twitter social"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/gray-school-45a430175/" target="_blank"><span class="fa fa-linkedin social"></span></a></li>
                                    <li><a href="https://www.instagram.com/gray_school/" target="_blank"><span class="fa fa-instagram social"></span></a></li>
                                     </ul>
    
    <a href="clat-coaching-centre-hyderabad.html"><p class="back"><i class="fa fa-arrow-left"></i> Back To Home</p></a> 
    
    </div>
   </center>
   
		<?php
		//header("Location:getintouch.php");
	}
	 
?>


</body>
</html>