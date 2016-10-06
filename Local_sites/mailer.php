<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Almost A Song :: Making Music in the Mountains</title>
<meta name="google-site-verification" content="dTu0SWT2zyDeD4f63El15odOoXFy-UH14FiELecNiKI" />

<meta name="description" content="Almost a Song is a traditional old-time mountain string band out of Fairmont, WV whose desire is to learn and play the songs that our forefathers played and expose and teach these songs to future musicians.">
<META http-equiv="Classification" CONTENT="Almost A Song">
<meta NAME="Distribution" CONTENT="Global">
<meta name="Revisit-After" content="3 Days">
<meta NAME="Robots" CONTENT="All">
<meta name="keywords" content="appalachian, jam session, bass, mandolin, guitar, banjo, old time, traditional, irish, almost a song, fairmont wv, music, mountain, fiddle tunes, West Virginia">
<link href="styles.css" rel="stylesheet" type="text/css" media="screen">



</head>


		<body>
<div id="content">
  <div id="back">
    <!-- header begins -->
    <div id="menu">
       <ul>
      <li><a href="index.html" title="">home</a></li>
        <li><a href="cal/calendar.html"  title="">calendar</a></li>

        <li><a href="pictures.html" title="">pictures</a></li>
        <li><a href="recordings2_a.html" title="">recordings</a></li>
        <li><a href="aboutUs.html" title="">About us</a></li>
        <li><a href="contact.html" title="">Contact</a></li>
        <li><a href="members.html" title="">Projects</a></li>
      </ul>

    </div>
    <div id="logo">
     
   
    </div>
    <!-- header ends -->
    <!-- content begins -->
    <div id="main">

      <div align="center" class="orangeHeader"><img src="images/emailUs.jpg" width="300" height="343" alt="thank you" align="top" class="pic_float" /> <br />
 <div style="height:450px;">
 <div id="footer" style="float:right; width:766px;">
       <table width="100%" border="0" cellpadding="5" cellspacing="5">
          <tr>
            <td width="68%"><div align="left"><img src="images/mandolin.png" alt="mandolin" width="233" height="90" align="left" /><img src="images/banjo1.png" alt="banjo" width="233" height="90" align="right" /></div></td>
            <td width="32%"><div align="right"><img src="images/guitar.png" alt="guitar" width="215" height="90" /> </div></td>
          </tr>
          <tr>
            <td><div align="left">Copyright &copy; 2010 <a href="index.html">Almost A Song 
                </a> ● All Rights Reserved</div></td>
            <td><div align="right">Web site design by: <a href="http://www.renorigs.com" target="_blank">renorigs.com</a></div></td>
          </tr>
        </table>
      </div>
      <div class="below_footer"> </div>
 
<p>
<?php
if(isset($_POST['submit'])) { 
$to = "leighann.hoo@gmail.com"; 
$subject = "Someone signing up for emailings"; 
$name_field = check_input($_POST['name'], "Enter you name");

 
$email_field = check_input($_POST['email'], "Enter you email address");

$phone = $_POST['phone']; 
$message = $_POST['message']; 


  
$body = "From: $name_field\n\n E-Mail: $email_field\n\n Phone: $phone\n\n Message:\n $message"; 



 
 echo '<div class="PageHeader3">'; 



echo "
Thank you for signing up for our email list! <br />
 </div> 




"; 

echo '</p>'; 

mail($to, $subject, $body); 
} else { 
echo "ERROR: no data sent!"; 
} 


function show_error($myError)
{
?>
    <html>
    <body>
    <div class="PageHeader3">Please correct the following error:</div>
   
    <?php echo $myError; ?>

</body>
    </html>
<?php
die();
}

?> 
</p>
    </div>
   



</body>
</html>

<?php
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}


?>


