<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$query=$_POST['query'];

if($name != ''){

$to = "rajgarhfarms@gmail.com";
$subject = "Query received through website rajgarhfarms.com";

$message = "
<html>
<head>
<title>Query received through website rajgarhfarms.com ".$name."</title>
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
<th>query</th>
<td>".$query."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <rajgarhfarms@gmail.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers,'-f umakant@gmail.com'))
{
    $messa="sent";
}else{
    $messa="fail";
}
echo $messa;
}
?>