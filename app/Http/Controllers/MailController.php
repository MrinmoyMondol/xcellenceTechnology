<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class MailController extends Controller
{
    //Sending Mail
    public function sendMail(Request $request){
//        dd($request->all());



//        $mail = new PHPMailer(true);
//
//        try {
//            //Server settings
//
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//
//            $mail->isSMTP();
//            // Send using SMTP
//            $mail->Host       = env('MAIL_HOST');
////                 dd( $mail->Host );
//            // Set the SMTP server to send through
//            $mail->SMTPAuth   = true;
//            // Enable SMTP authentication
//            $mail->Username   = env('MAIL_USERNAME');
//            // SMTP username
//            $mail->Password   = env('MAIL_PASSWORD');
//            // SMTP password
//            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
//            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//            $mail->Port       = env('MAIL_PORT');
//
//
//            Log::info("Check:".$mail->Host. ' '.$mail->Username.' '.$mail->Password.' '.$mail->SMTPSecure.' '.$mail->Port);// TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
//
////            //Recipients
////            $mail->setFrom($email , $name);
//
//
//
//            $mail->addAddress('testmondol32@gmail.com' , $name);
////            $mail->addAddress($email , $name);
//
//
//
//
//            // Content
//            $mail->isHTML(true);
//            // Set email format to HTML
//            $mail->Subject = $subject;
//
//            $mail->Body    =   $message .'<br>'. $name .'<br>'. $email;
//
//            $mail->send();
//
//
//
//        }  catch (Exception $e) {
////            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//
////            dd($e);
//        }
//
//        if ($mail){
//            return redirect()->back()->with('success','Mail Send Successfully..!!');
//        }
//        else{
//            return redirect()->back()->with('error','Something Went Wrong')->withInput();
//        }
//    }



 $data =[

       'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message

 ];

        Mail::to('testmondol32@gmail.com')->send(new \App\Mail\ContactMail($data));

        return redirect()->back()->with('success','Mail Send Successfully..!!');
}





}
