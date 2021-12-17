<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$mess=$_POST['subject'];

if($name != ''){

$to = "easychar@skyeast.co.uk";
// easychar@skyeast.co.uk
$subject = "From easychar";

$message = "
<html>
<head>
<title>From easychar ".$name."</title>
</head>
<body>

<table>
<tr>
<th>Name</th>
<td>".$name."</td>
</tr>
<tr>
<th>Email</th>
<td>".$email."</td>
</tr>
<tr>
<th>Phone</th>
<td>".$phone."</td>
</tr>
<tr>
<th>Subject</th>
<td>".$subject."</td>
</tr>
<tr>
<th>Message</th>
<td>".$mess."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers,'-f no-reply@xyz.com'))
{
    $messa="sent";
}else{
    $messa="fail";
}
echo $messa;
}
?>