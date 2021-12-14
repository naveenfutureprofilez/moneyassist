<?php 

if(!empty($_POST) && $_POST['action']=='homepage'){

	$name = $_POST['fname'].' '.$_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$ammount = $_POST['ammount'];
	$subject = 'Contact form email from MoneyAdvisory';
	$message = '<table style="border: 1px solid #ccc; border-collapse: collapse; font-family: Arial" width="100%" width="100%">
	
	<tr><td style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 8px;">Name</td>
	<td style="padding: 8px;border-bottom: 1px solid #ccc;">'.$name.'</td>
	</tr>
	<tr><td style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 8px;">Phone</td>
	<td style="padding: 8px;border-bottom: 1px solid #ccc;">'.$phone.'</td>
	</tr>
	<tr>
	<td style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 8px;">Email</td>
	<td style="padding: 8px;border-bottom: 1px solid #ccc;">'.$email.'</td>
	</tr><tr>
	<td style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 8px;">Amount</td>
	<td style="padding: 8px;border-bottom: 1px solid #ccc;">'.$ammount.'</td>
	</tr>
</table>';
//echo $message; die;
	$to = 'mukesh@fpdemo.com';
	//mail($to, $subject, $message)
	header('location:thanku.html');
	exit();
}

if(!empty($_POST) && $_POST['action']=='contactpage'){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	$messagebody = '<table style="border: 1px solid #ccc; border-collapse: collapse; font-family: Arial" width="100%">
	<tr>
	<td style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 8px;">Name</td>
	<td style="padding: 8px;border-bottom: 1px solid #ccc;">'.$name.'</td></tr>

	<tr><td style="border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 8px;">Email</td>
	<td style="padding: 8px;border-bottom: 1px solid #ccc;">'.$email.'</td></tr>
	<tr><td style="border-right: 1px solid #ccc; padding: 8px;">Message</td>
	<td style="padding: 8px;">'.$message.'</td></tr>
</table>';
	//echo $messagebody; die;
	$to = 'mukesh@fpdemo.com';
	//mail($to, $subject, $messagebody)
	header('location:thanku.html');
	exit();
}

?>





