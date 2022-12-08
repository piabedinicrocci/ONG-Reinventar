<?php 

//if(isset($_POST['submit'])){
    $to = "Reinventar Tandil <info@reinventartandil.com>"; // TODO Own Email address
    $name = $_POST['name'];
    $from = $_POST['email']; // Sender Email address
    $message = $_POST['message'];
    $subject = $name . "envio una consulta";
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    $message = $name . " envío el siguiente mensaje: " . "\n\n" . $message;
    $message2 = "Recibimos tu consulta, te la responderemos a la brevedad."; 

    $success = mail($to,$subject,$message,$headers);
        if ($success) {
            mail($from,$subject,$message2,$headers2);
            echo "<script>
                window.location.href = 'https://www.reinventartandil.com';   
                sessionStorage.setItem('showmsg', '1');
            </script>";
        }
?>