<?php
    function send_mail($email, $object, $textm){
        // definisco mittente e destinatario della mail
        $name = 'Free Developers';
        $mail_mittente = "no-reply@freedeveloper.it";

        // definisco il subject ed il body della mail
        $mail_oggetto = "Messaggio di prova";
        $mail_corpo = "Questo è un messaggio di prova per testare la mia applicazione";

        // aggiusto un po' le intestazioni della mail
        // E' in questa sezione che deve essere definito il mittente (From)
        // ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
        $mail_headers = "From: " .  $name . " <" .  $mail_mittente . ">\r\n";
        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
        $mail_headers .= "X-Mailer: PHP/" . phpversion();
        $mail_headers .= "MIME-Version: 1.0\n";
		$mail_headers .= "Content-Type: text/html; charset=\"utf-8\"\n";
		$mail_headers .= "Content-Transfer-Encoding: 7bit\n\n";

        if (mail($email, $object, $textm, $mail_headers))
            return true;
        else
            return false;
    }
?>