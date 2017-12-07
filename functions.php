<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function checkAnniv($bdd){
    $date=date("m-d");
    $result=$bdd->query("SELECT prenom, mail FROM simploniens
    WHERE anniversaire LIKE '%".$date."'");
    if($result->num_rows > 0) {
        $line = $result->fetch_assoc();
        $request=$bdd->query("SELECT mail FROM simploniens
    WHERE anniversaire NOT LIKE '%".$date."'");
        sendMails($line,$request);
    }
    else{
        echo "Pas d'anniversaire aujourd'hui";
    }
}

function sendMails($line,$request){
    $objet1="Joyeux anniversaire";
    $objet2="Anniversaire de ".$line['prenom'];
    $message1="Joyeux anniversaire cher simplonien";
    $message2="C'est l'anniversaire de ".$line['prenom']." aujourd'hui. Pensez y !";
    $message1 = wordwrap($message1, 70, "\r\n");
    $message2 = wordwrap($message2, 70, "\r\n");
    $destinataire="";
    $i=1;
    foreach($request as $rq){
        if($i == $request->num_rows){
            $destinataire .= $rq['mail'];
        }
        else {
            $destinataire .= $rq['mail'] . ",";
            $i++;
        }
    }
    echo $line['mail']."<br>".$objet1."<br>".$message1."<br>";
    echo $destinataire."<br>".$objet2."<br>".$message2."<br>";
    newMail('amaterasu.sempai@gmail.com',$objet1,$message1);
}

function newMail($email,$objet,$message)
{
    $mail = new PHPMailer();
    //$mail->IsSMTP();
    //$mail->host='smtp.gmail.com';
    //$mail->SMTPDebug = 4;
    //$mail->SMTPAuth = true;
    //$mail->SMTPSecure = 'ssl';
    //$mail->SMTPAuth   = false;
    //$mail->Port = 587; // Par défaut

    $mail->Username = "simplon.anniv@gmail.com";
    $mail->Password = "Glados1337";

// Expéditeur
    $mail->SetFrom('simplon.anniv@gmail.com');
// Destinataire
    $mail->AddAddress($email);
// Objet
    $mail->Subject = $objet;

// Votre message
    $mail->MsgHTML($message);

// Envoi du mail avec gestion des erreurs
    if(!$mail->Send()) {
        echo 'Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Message envoyé !';
    }
}
?>