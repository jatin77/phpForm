<?php


    $txtName=$_POST['name'];  
    $txtMail=$_POST['email'];  
    $txtName = str_replace(array("\n","\r"),'',$txtName);   
    $txtEMail = str_replace(array("\n","\r"),'',$txtMail);
    $txtLink = "put your link here";  
    $Myemail="clockstopfountain@gmail.com";  
    $message ="This is your Link :\t$txtLink\n  
        \n"; 
        $subject = "Your Link is Here"; 
        $mailheaders = "From: $Myemail <> \n";   
        $mailheaders .= "Reply-To: $Myemail\n\n";   
        $theiremail = $txtEmail; 
        echo  $theiremail;
        mail($theiremail, $subject, $message ,  $mailheaders);  
    header("Location: index.php?mailsend")



?>