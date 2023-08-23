<?php
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
		
		
		 
	
  //	$file_to_attach = 'images/';

		 $toaddress = "grayschoolbranding@gmail.com"; 
		  
		$cc = '';
		$subject = 'Contact Details from Grayschool';
		$message = '<html><body><fieldset style="border-color: #FF0000"><form><table  align="center" cellpadding="0" cellspacing="5" bordercolor="#FFFFFF">
<tr align="center">
 <td colspan="2" align="center" valign="top" style="color:#FF0000"><U><strong>Contact Details from Grayschool</strong></U></td>
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
						<td align="left" valign="top"><div align="right"><strong>Phone Number:</strong></div></td>
						<td align="left" valign="top" width="259"> 
						  '.$_POST['phone'].'
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
		 <script>
		    alert('Thank You For contacting!.....');
		    window.location='index.html';
		</script>
		<?php
		// header("Location:index.html");
	}
	 
?>
