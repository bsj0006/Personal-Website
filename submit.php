<?php
// define variables and set to empty values

$dest = "bsj0006@uah.edu";
$subject = "Website Suggestion";
$fname = $sname = $email = $comment = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = ($_POST["first"]);
    $sname = ($_POST["second"]);    
    $email = ($_POST["eaddress"]); 
    $comment = ($_POST["suggestion"]);
    $message.= "This suggestion is from ".$fname." ".$sname.".\n\n";
    $message.= $suggestion."/n/nYou can reply at ".$eaddress.".";    
    mail($dest, $subject, $message);
}
?>

Thank you for contacting us. We will be in touch with you very soon. 
 
<?php
 
?>
