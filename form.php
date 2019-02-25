<?php

    $message = "";
    $messageClass = "";

    //Check for submit
    if(filter_has_var(INPUT_POST, 'submit'))   
    {
        //Get form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phonenumber = htmlspecialchars($_POST['phonenumber']);
        $company = htmlspecialchars($_POST['company']);
        $message = htmlspecialchars($_POST['message']);
        $question = htmlspecialchars($_POST['question']);


        // Check Required Fields
        if(!empty($email) && !empty($name))
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
            {
				// Failed
				$message = 'Please use a valid email';
				$messageClass = 'send-message message-error';
            }
            
            else 
            {

                if($question != 7)
                {
                    $message = 'Please answer the security question correctly';
                    $messageClass = 'send-message message-error';
                    
                    
                }

                else
                {
                    // Passed
                    $toEmail = 'info@swatimandelaspeaks.com';
                    $subject = 'Contact Request From '.$name;
                    $body = '
                    
                        <h1>Contact Request</h1>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Phone Number</h4><p>'.$phonenumber.'</p>
                        <h4>Company</h4><p>'.$company.'</p>
                        <h4>Message</h4><p>'.$message.'</p>

                        


                    ';
                    

                    // Email Headers
                    $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


                    //Mail to email
                    if(mail($toEmail, $subject, $body, $headers,'-finfo@swatimandelaspeaks.com'))
                    {
                        // Email Sent
                        $message = 'Your request has been sent!';
                        $messageClass = 'send-message message-success';
                        
                        header('Location: '.$_SERVER['PHP_SELF'] . '?message=success');
                        
                    } 
                    
                    else 
                    
                    {
                        // Failed
                        $message = 'Your request was not sent, Please try again.';
                        $messageClass = 'send-message message-error';
                        
                        header('Location: '.$_SERVER['PHP_SELF'] . '?message=failed');
                    
                    }
                }
				
            }

        }

        else
        {
            //Failed
            $message = "Please fill in all the required fields.";
            $messageClass = "send-message message-error";
        }



    }



?>

<?php
    
    if(($_GET['message']) == "success")
    {
        $message = 'Your message has been sent!';
	    $messageClass = 'send-message message-success';
    }

    if(($_GET['message']) == "failed")
    {
        $message = 'Your message was not sent, Please try again.';
        $messageClass = 'send-message message-error';
    }
?>
