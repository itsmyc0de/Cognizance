<?php
require('config.php');
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$dept=$_REQUEST['dept'];
$mobile=$_REQUEST['mobile'];
$event=$_REQUEST['event'];
$email=$_REQUEST['mail'];
$mem1_name=$_REQUEST['m1_name'];
$mem1_phone=$_REQUEST['m1_phone'];
$mem2_name=$_REQUEST['m2_name'];
$mem2_phone=$_REQUEST['m2_phone'];
$mem3_name=$_REQUEST['m3_name'];
$mem3_phone=$_REQUEST['m3_phone'];
$mem4_name=$_REQUEST['m4_name'];
$mem4_phone=$_REQUEST['m4_phone'];

$query=mysqli_query($link,"insert into fun (name,rollno,department,mobile,event,email,mem1_name,mem1_phone,mem2_name,mem2_phone,mem3_name,mem3_phone,mem4_name,mem4_phone) values ('$name','$roll','$dept','$mobile','$event','$email','$mem1_name','$mem1_phone','$mem2_name','$mem2_phone','$mem3_name','$mem3_phone','$mem4_name','$mem4_phone')") ;

if($query == true){
	$to = '$email';
	$subject = 'COGNIZANCE 2k17';
	$from = 'csecognizance2k17@gmail.com';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
           'X-Mailer: PHP/' . phpversion();
	$message = '<html><body>';
	
	$message .= '<h1>Dear'.$name.',!</h1>';
	$message .= '<p">Thank you for registering cognizance 2k17!<br>We will send you confirmation mail once you has been selected.</p>';
	$message .= '</body></html>';
    if(mail($to, $subject, $message, $headers)){
        Print '<script>alert("Mail Send :)!");</script>';
    } else{
        Print '<script>alert("Mailing Error!");</script>';
    }
	Print '<script>alert("Sucessfully Registered \n Thankyou :)!");</script>';
	Print '<script>window.location.assign("../index.html");</script>';
}
else{
	Print '<script>alert("Registration Failed \nTry Again:)!");</script>';
	Print '<script>window.location.assign("reg_fun.php");</script>';
}

?>
