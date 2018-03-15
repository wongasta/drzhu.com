<?php
   if(isset($_POST['email'])) {
    $email_to	= "bindizhu8@gmail.com";
    $email_subject = "Patient Contact Information";
function died($error)	{
    echo "We are very	sorry, but there were	error(s) found with	the	form you submitted.	";
    echo "These	errors appear	below.<br	/><br	/>";
    echo $error. "<br /><br />";
    echo "Please go	back and fix these errors.<br	/><br	/>";
    die();
}
// validation	expected data	exists
if(!isset($_POST['first_name'])	||
    !isset($_POST['last_name'])	||
    !isset($_POST['email'])	||
    !isset($_POST['telephone'])	||
    !isset($_POST['comments']))	
    {
    	died('We are sorry,	but	there	appears	to be	a	problem	with the form	you	submitted.');	
    }
$first_name	=	$_POST['first_name'];	// required
$last_name = $_POST['last_name'];	// required
$email_from	=	$_POST['email']; //	required
$telephone = $_POST['telephone'];	// not required
$comments	=	$_POST['comments'];	// required
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from))	{
    $error_message .=	'The Email Address you entered does	not	appear to	be valid.<br />';
}
$string_exp	=	"/^[A-Za-z .'-]+$/";
if(!preg_match($string_exp,$first_name)) {
    $error_message .=	'The First Name	you	entered	does not appear	to be	valid.<br	/>';
}
if(!preg_match($string_exp,$last_name))	{
    $error_message .=	'The Last	Name you entered does	not	appear to	be valid.<br />';
}
if(strlen($comments) < 2)	{
    $error_message .=	'The Comments	you	entered	do not appear	to be	valid.<br	/>';
}
//if( strlen($error_message)	>	0 ) {
 //   died ( $error_message);
//}
function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}
if( strlen($error_message)	==	0 ) {
$email_message = "Patient Contact Information:\n\n";
$email_message .=	"First Name: ".clean_string($first_name)."\n";
$email_message .=	"Last	Name:	".clean_string($last_name)."\n";
$email_message .=	"Email:	".clean_string($email_from)."\n";
$email_message .=	"Telephone:	".clean_string($telephone)."\n";
$email_message .=	"Comments: ".clean_string($comments)."\n";
// create	email	headers
//$headers = 'From:'.$email_from."\r\n".
$headers = "From:$email_from\r\n";
$headers .= "Reply-To:$email_from\r\n";
$headers .= "X-Mailer: PHP/phpversion()";

//$send_contact=mail($email_to, $email_subject, $email_message);
$send_contact=mail($email_to, $email_subject, $email_message, $headers);	
header("Location: Acupuncture-Austin-ThankYou.htm");

}
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->

</script>
<link href="global.css" rel="stylesheet" type="text/css">

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<style type="text/css">
<!--
.style2 {font-size: 10px}
.style4 {font-size: 9px}
    .style5
    {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
-->
</style>
<title>Austin Acupuncture | Dr Bindi Zhu MD (China) LAc | Conditions</title>
<meta name="description" content="Dr Zhu is widely recognized in the integration of Western/Chinese medicine receiving numerous awards for excellence. Free consultation- insurance accepted"/>
<meta name="keywords" content="Acupuncture Austin, Bindi Zhu, Acupuncture Austin TX, Accupuncture Austin"/>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22154378-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body leftmargin=0 rightmargin=0 topmargin=0 bottommargin=0 marginwidth=0 marginheight=0>

<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td> </td></tr>
<tr><td>
<!-- Center Table -->
<!--<table width="800px" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CD9967"> -->

<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/logo2.gif" width="200" height="61"><img src="images/topbar.gif" width="600" height="61"></td>
  </tr>
    <tr height="23px">
    <td bgcolor="996666">         <img src="images/bindi.gif" align="absmiddle"></td>
  </tr>
  <!--  ********  body content *********  -->
  <tr><td>
  <table width="100%" height="500px" border="0" cellpadding="0" cellspacing="0">
   <tr>
  
  <!-- *********  Menu  ********  -->
<td valign="top" width="200px" background="/images/wtback.gif" class="menu">
  <p><span class="style1">General Links</span><br>
	      		<a href="index.htm">Home</a><br>
	      		<a href="Acupuncture-Austin-Bindi-Zhu.htm">About Dr. Zhu</a><br>
	      		<a href="Acupuncture-Austin-Testimonials.htm">What do patients say?</a><br>
	      		<a href="Acupuncture-Austin.htm">Acupuncture</a><br>
	      		<a href="Acupuncture-Austin-Treatment.htm">Traditional Chinese Medicine</a><br>
	      		<a href="Acupuncture-Austin-Chinese-Medicine.htm">Integrated Medicine</a><br>
	      		<a href="Acupuncture-Insurance-Coverage.htm">Insurance Coverage</a><br>
	      		<a href="Acupuncture-Consultation.htm">Free Consultation</a><br>
	      		<a href="Austin-Location.htm">Austin Location</a> <br> 
	      		<a href="Acupuncture-Austin-Links.htm">Related Links</a><br> 	
	      		<a href="Acupuncture-Austin-Contact.php">Contact Us</a>
	<p><span class="style1">Articles</span><br>
	    <strong><em>Acupuncture For Women</em></strong><br>
	         <a href="Acupuncture-Women-Health.htm">Women's Health</a><br>
	         <a href="Acupuncture-Menopause.htm">Menopause</a><br>
	         <a href="Acupuncture-Fertility.htm">Fertility</a><br>
	    			<strong><em>Pain Management</em></strong><br>
	      		<a href="Acupuncture-Headache.htm">Headache</a><br>
	      		<a href="Acupuncture-Sinusitis.htm">Allergy and Sinus</a><br>
	      		<a href="Acupuncture-Backpain.htm">Back Pain</a><br>
	      		<a href="Acupuncture-Hepatitis.htm">Hepatitis C</a><br>
	      		<a href="Acupuncture-Depression.htm">Depression</a><br>
	      		<a href="Acupuncture-Quit-Smoking.htm">Quit Smoking</a><br>
	      		<a href="Acupuncture-Stroke-Rehabilitation.htm">Stroke Rehabilitation</a><br>
	      		<a href="Acupuncture-Nephritis.htm">Nephritis</a><br>
	  </p>
  </td>

  <!-- *********  Content  ********  -->
  
  <td valign="top" width="*" bgcolor="white"><!-- InstanceBeginEditable name="main" -->
     <p><span class="pagetitle">Contact Us</span></p>
     <p><img src="images/Office-F.jpg" align="center"><br><br>
      	 <p><b>1008 Mopac Circle, Suite 201, Austin, TX 78746</b></p>
     <p><?php echo $error_message;?></p>
   <form name="contactform" method="post" action="Acupuncture-Austin-Contact.php">
   <table width="450px">
   <tr> <td valign="top" class="style5">  
   <label for="first_name">First Name *</label> 
   </td> 
   <td valign="top">  
   <input  type="text" name="first_name" maxlength="50" size="30" value='<?php echo($_POST['first_name']); ?>' /> 
   </td></tr>
    <tr> <td valign="top" class="style5">  <label for="last_name">Last Name *</label> </td>
     <td valign="top">  <input  type="text" name="last_name" maxlength="50" size="30" value='<?php echo($_POST['last_name']); ?>' /> 
     </td>
     </tr>
     <tr> <td valign="top" class="style5">  <label for="email">Email Address *</label> </td> 
     <td valign="top">  <input  type="text" name="email" maxlength="80" size="30" value='<?php echo($_POST['email']); ?>' /> </td>
      </tr>
      <tr> <td valign="top" class="style5">  <label for="telephone">Telephone Number</label> </td> 
      <td valign="top">  <input  type="text" name="telephone" maxlength="30" size="30" value='<?php echo($_POST['telephone']); ?>' /> </td></tr>
      <tr> <td valign="top" class="style5">  Message<label for="comments"> *</label> </td> <td valign="top">  
      <textarea  name="comments" cols="40" rows="6"> <?php echo($_POST['comments']); ?></textarea> 
      </td> </tr>
      <tr><td colspan="2" style="text-align:center">  
      <input type="submit" value="Submit" />   
     </td>
     </tr></table>
    </form>
<div id="footer">
    	<a href="index.htm">Home</a> | <a href="Acupuncture-Austin-Bindi-Zhu.htm">About Dr. Zhu</a> | <a href="Acupuncture-Austin-Testimonials.htm">What do patients say?</a>
    	| <a href="Acupuncture-Austin.htm">Acupuncture</a> | <a href="Acupuncture-Austin-Treatment.htm">Traditional Chinese Medicine</a> | <a href="Acupuncture-Austin-Chinese-Medicine.htm">Integrated Medicine</a>
    	| <a href="Acupuncture-Insurance-Coverage.htm">Insurance Coverage</a> | <a href="Acupuncture-Consultation.htm">Free Consultation</a> | <a href="Austin-Location.htm">Austin Location</a>
    	| <a href="Acupuncture-Austin-Links.htm">Related Links</a> | <a href="Acupuncture-Women-Health.htm">Women's Health</a>
    	| <a href="Acupuncture-Menopause.htm">Menopause</a> |  <a href="Acupuncture-Fertility.htm">Fertility</a>
	    | <a href="Acupuncture-Headache.htm">Headache</a> | <a href="Acupuncture-Sinusitis.htm">Allergy and Sinus</a>
	    | <a href="Acupuncture-Backpain.htm">Back Pain</a> | <a href="Acupuncture-Hepatitis.htm">Hepatitis C</a>
	    | <a href="Acupuncture-Depression.htm">Depression</a> | <a href="Acupuncture-Quit-Smoking.htm">Quit Smoking</a>
	    | <a href="Acupuncture-Stroke-Rehabilitation.htm">Stroke Rehabilitation</a> | <a href="Acupuncture-Nephritis.htm">Nephritis</a>|<br> 
	    <a href="Acupuncture-Austin-Contact.php">Contact Us</a><br> 
    </div>

    <!-- InstanceEndEditable -->	<p align="center">Acupuncture and Herb Health Center<br>
	  <span class="style2">1111 West 24th St. Suite C, Austin, TX 78705<br>
	  (512) 457-0886    http://drzhu.com</span></p>
    <p align="center" class="style4">© Copyright 2011, Acupuncture and Herbal Health Center - All Rights Reserved.</p></td>
   </tr>
  </table>
</td>
</tr>
<tr>
<td> </td></tr>
</table>
</body>
<!-- InstanceEnd --></html>
