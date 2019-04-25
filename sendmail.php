<?php 
    require('phpmailer/PHPMailerAutoload.php');
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    if($name != null && $email != null && $message != null){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		    $signal = 'bad';
            $msg = 'Invalid email. Please check';
        }
        else{
            $mail = new PHPMailer;
            $mail->isSMTP();                                    
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;                            
            $mail->Username = 'chharvey@gmail.com';                
            $mail->Password = 'pyzxkzmranbcniwh';                          
            $mail->SMTPSecure = 'tsl';                           
            $mail->Port = 587;                                   
            $mail->setFrom('chharvey@gmail.com');
            $mail->addAddress('chharvey@gmail.com');     
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);                                  
            $mail->Subject = 'New Contact Form Message';
            $mail->Body    = 'Name: '.$name.' <br />Message: '.$message;
            
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $signal = 'ok';
                $msg = 'Form submitted';
            }
        }
    }
    else{
        $signal = 'bad';
        $msg = 'Please fill in all the fields.';
    }
    $data = array(
        'signal' => $signal,
        'msg' => $msg
    );
    echo json_encode($data);
?>