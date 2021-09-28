<?php

include './incl/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';



function mailSuccess($to, $subject, $htmlBody)
{
    global $host;
    global $username;
    global $password;
    global $email_from;
    global $email_from_name;

    $message = '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Making Accessible Emails</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <style type="text/css">
                /* CLIENT-SPECIFIC STYLES */
                body,
                table,
                td,
                a {
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                }
                table,
                td {
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                }
                img {
                    -ms-interpolation-mode: bicubic;
                }
    
                td,
                th {
                    border: 1px solid;
                    padding: 8px;
                }
    
                /* RESET STYLES */
                img {
                    border: 0;
                    height: auto;
                    line-height: 100%;
                    outline: none;
                    text-decoration: none;
                }
                table {
                    border-collapse: collapse !important;
                }
                body {
                    height: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    width: 100% !important;
                }
            </style>
        </head>
        <body
            style="background-color: aliceblue; margin: 0 !important; padding: 60px 0 60px 0 !important"
        >
            <table border="0" cellspacing="0" cellpadding="0" role="presentation" width="100%">
                <tr>
                    <td
                        bgcolor="white"
                        width="600"
                        style="
                            border-radius: 4px;
                            color: grey;
                            font-family: sans-serif;
                            font-size: 18px;
                            line-height: 28px;
                            padding: 40px 40px;
                        "
                    >
                        <article>
                            ' . $htmlBody . '
                        </article>
                    </td>
                </tr>
            </table>
        </body>
    </html>
    ';


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $host;                                  //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $username;                              //SMTP username
        $mail->Password   = $password;                              //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email_from, $email_from_name);
        $mail->addAddress($to);                                   //Name is optional
        // $mail->addAddress('ellen@example.com');               //Name is optional

        // $mail->addReplyTo('info@example.com', 'Information');

        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
