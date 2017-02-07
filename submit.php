<?php
// define variables and set to empty values

$dest = "bsj0006@uah.edu";
$subject = "Website Suggestion";
$name = $email = $comment = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST["fullname"]);  
    $email = ($_POST["eaddress"]); 
    $comment = ($_POST["suggestion"]);
    $message.= "This suggestion is from ".$name.".\n\n";
    $message.= $comment."\n\n"."You can reply at ".$email.".";    
    mail($dest, $subject, $message);
}
?>
<html>
<head>
    <title>Bradley</title>
    <link rel="icon" href="BSJ32.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="w3.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="8; url=http://bsj.webutu.com" />   
</head>
<body>
	<ul class="w3-navbar w3-xlarge w3-blue w3-left-align w3-top w3-card-4">
        <li class="w3-hide-medium w3-hide-large">
            <a onclick="expand('smallnav')" href="#">☰</a>
        </li> 
        <li class="w3-hide-small"><a href="../#Home">Home</a></li>
        <li class="w3-hide-small"><a href="../#Projects">Projects</a></li>
        <li class="w3-hide-small"><a href="../#About">About</a></li>
        <li class="w3-hide-small"><a href="../#Links">Links</a></li>
        <li class="w3-hide-small"><a href="../#More">More</a></li>

        <div id="smallnav" class="w3-dark-grey w3-hide w3-hide-large w3-hide-medium">
            <li><a onclick="expand('smallnav')" href="../#Home">Home</a></li>
            <li><a onclick="expand('smallnav')" href="../#Projects">Projects</a></li>
            <li><a onclick="expand('smallnav')" href="../#About">About</a></li>
            <li><a onclick="expand('smallnav')" href="../#Links">Links</a></li>
            <li><a onclick="expand('smallnav')" href="../#More">More</a></li>
        </div>
    </ul>
	<br><br>
<div class="w3-container">
	<div class="w3-panel w3-pale-blue w3-hover-light-blue w3-animate-top w3-leftbar w3-border-blue w3-center">
		<h1><b>Thank you for contacting us. I will be in touch with you very soon.</b></h1>
		<br><p>You will be redirected shortly.
	</div>
</div> 
</body></html>
 
<?php
 
?>
