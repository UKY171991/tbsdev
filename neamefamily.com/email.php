<?php
//print_r($_POST);

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$nick_name=$_POST['nick_name'];
$siffix=$_POST['siffix'];
$title=$_POST['title'];
$dob=$_POST['dob'];
$dob_place=$_POST['dob_place'];
$gender=$_POST['gender'];
$ChirsteningDate=$_POST['ChirsteningDate'];
$ChirsteningPlace=$_POST['ChirsteningPlace'];
$DeathDate=$_POST['DeathDate'];
$DeathPlace=$_POST['DeathPlace'];
$BurialDate=$_POST['BurialDate'];
$BurialPlace=$_POST['BurialPlace'];
$BaptismDate=$_POST['BaptismDate'];
$BaptismPlace=$_POST['BaptismPlace'];
$Notes=$_POST['Notes'];
$FatherName=$_POST['FatherName'];
$FatherDOB=$_POST['FatherDOB'];
$email=$_POST['email'];

//$to = "umakant.abrpl@gmail.com,mahendra@absoluteranking.com,satish.negi@absoluteranking.com";
//$to = "new.person@neamefamily.com";
//$to = "umakant.abrpl@gmail.com";
$to = "new.person@neamefamily.com";
$subject = $first_name." from neamefamily.com";

$message = "
<html>
<head>
<title>".$first_name." from neamefamily.com</title>
</head>
<body>
<table width='614px' align='center' style='background: #F1F1F1;'>




</table>
</body>
</html>
";


$message .='
<table width="614px" align="center" style="background: #F1F1F1;">
  <tr>
    <td>
      <div style="width:614px; border:1px solid #efefef; font: normal 12px Verdana, Arial, Helvetica, sans-serif; padding:2px; border:1px solid #ccc; margin:0px auto; 0">
        <div style="background:#fff; padding:15px 10px;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center">
                <img src=" http://www.neamefamily.com/images/title.jpg  " alt="" />
              </td>
            </tr>
          </table>
        </div>
        <div style="min-height:300px; padding:10px;">
          <h2 style="margin:0; padding:5px 0 10px;margin-bottom:15px; border-bottom: 1px solid #bbb8af;color: #020a65;">
          New Person Contact Form</h2>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th height="25">First/given name(s)</th>
              <td height="25">:</td>
              <td height="25">'.$first_name.'</td>
            </tr>
           
            <tr>
              <th height="25">Last/Surname</th>
              <td height="25">:</td>
              <td height="25">'.$last_name.'</td>
            </tr>

            <tr>
              <th height="25">Nickname</th>
              <td height="25">:</td>
              <td height="25">'.$nick_name.'</td>
            </tr>


            <tr>
			<th height="25">Father`s Name</th><td height="25">:</td>
			<td>'.$FatherName.'</td>
			</tr>
			<tr>
			<th height="25">Father`s DOB</th><td height="25">:</td>
			<td>'.$FatherDOB.'</td>
			</tr>
 
            

            <tr>
			<th height="25">Suffix</th><td height="25">:</td>
			<td>'.$siffix.'</td>
			</tr>
			<tr>
			<th height="25">Title</th><td height="25">:</td>
			<td height="25">'.$title.'</td>
			</tr>
			<tr>
			<th height="25">Birth Date</th><td height="25">:</td>
			<td height="25">'.$dob.'</td>
			</tr>
			<tr>
			<th height="25">Birth Place</th><td height="25">:</td>
			<td height="25">'.$dob_place.'</td>
			</tr>
			<tr>
			<th height="25">E-mail</th><td height="25">:</td>
			<td height="25">'.$email.'</td>
			</tr>
			<tr>
			<th height="25">Sex</th><td height="25">:</td>
			<td height="25">'.$gender.'</td>
			</tr>
			<tr>
			<th height="25">Christening Date</th><td height="25">:</td>
			<td height="25">'.$ChirsteningDate.'</td>
			</tr>
			<tr>
			<th height="25">Chirstening Place</th><td height="25">:</td>
			<td height="25">'.$ChirsteningPlace.'</td>
			</tr>
			<tr>
			<th height="25">Death Date</th><td height="25">:</td>
			<td height="25">'.$DeathDate.'</td>
			</tr>
			<tr>
			<th height="25">Death Place</th><td height="25">:</td>
			<td height="25">'.$DeathPlace.'</td>
			</tr>

			<tr>
			<th height="25">Burial Date</th><td height="25">:</td>
			<td height="25">'.$BurialDate.'</td>
			</tr>
			<tr>
			<th height="25">Burial Place</th><td height="25">:</td>
			<td height="25">'.$BurialPlace.'</td>
			</tr>
			<tr>
			<th height="25">Baptism Date(LDS)</th><td height="25">:</td>
			<td height="25">'.$BaptismDate.'</td>
			</tr>
			<tr>
			<th height="25">Baptism Place(LDS)</th><td height="25">:</td>
			<td height="25">'.$BaptismPlace.'</td>
			</tr>
			<tr>
			<th height="25">Notes</th><td height="25">:</td>
			<td height="25">'.$Notes.'</td>
			</tr>  
          </table>
        </div>
        <div style="background:#a0a0a0; text-align:center; font-size:12px; padding:10px 0; color:#fff;">Copyright &copy; 2021 .All Rights Reserved</div>
      </div>
    </td>
  </tr>
</table>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
//$headers .= 'From: <info@neamefamily.com>' . "\r\n";
$headers .= 'Cc: martin.neame@gmail.com' . "\r\n";

if(mail($to,$subject,$message,$headers,'-f no-reply@xyz.com')){
	echo "send";
}
?>