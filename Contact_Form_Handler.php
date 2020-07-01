<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name']

        $email = $_POST['email']

        $phone = $_POST['phone']
    
        $msg = $_POST['msg']
    
        $to = 'rohan_sethi-22.98@ieee.org'; 
        $subject = 'Contact Request' 
        $message = "Name".$name."\n". "Phone:".$phone."\n". "Sent a message to you, which is as follows:"."\n" "\n".$msg;
        $headers = "From:" $email;

        if(mail($to, $subject, $message, $headers)){

            echo "<h1> Sent Successfully. Thank You!"." ".$name.",I will be in touch shortly!</h1>";

        }
        else{

            echo "Something went wrong!";
        }

    }

?>