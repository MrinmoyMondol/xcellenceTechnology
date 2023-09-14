<?php

namespace Modules\Dashboard\Http\Controllers;

use App\Models\Support;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard::index');
    }


    //Register Form Function
    public function register(){
        return view('dashboard::auth.register');
    }


    //Home Page Function
    public function home(){
        return view('dashboard::home.home');
    }


    //Get Support Function
    public function getSupport(){
        $allMessages = Support::orderBy('id','desc')->get();
        return view('dashboard::support.suppList',[
            'allMessages'=>$allMessages
        ]);
    }


    //Retrieve Data Through Modal Function
    public function unSendSupport($id){

        $dataByID = Support::find($id);

      return response()->json($dataByID);
    }

    //Retrieve Data Through Modal Function
    public function viewDetails($id){

        $clientByID = Support::find($id);

      return response()->json($clientByID);
    }


    //Customer Support Reply Function
    public function sendReply(Request $request){

//        dd($request->all());

        $message = $request->txt_reply;
        $subject = $request->txt_subject;
        $clientMail = $request->txt_sendMail;


        $mail = new PHPMailer(true);

        try {
            //Server settings

            $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $mail->isSMTP();
            // Send using SMTP
            $mail->Host       = env('MAIL_HOST');
//                 dd( $mail->Host );
            // Set the SMTP server to send through
            $mail->SMTPAuth   = true;
            // Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');
            // SMTP username
            $mail->Password   = env('MAIL_PASSWORD');
            // SMTP password
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = env('MAIL_PORT');


            Log::info("Check:".$mail->Host. ' '.$mail->Username.' '.$mail->Password.' '.$mail->SMTPSecure.' '.$mail->Port);// TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//            //Recipients
            $mail->setFrom('testmondol32@gmail.com','Virtual Sheba');



            $mail->addAddress($clientMail);
//            $mail->addAddress($email , $name);




            // Content
            $mail->isHTML(true);
            // Set email format to HTML
            $mail->Subject = $subject;

            $mail->Body    =   $message ;

            $mail->send();

            $updateID = Support::where('id',$request->txt_clientID )->first();
            $updateID ->status = 1;
            $updateID->save();



        }  catch (Exception $e) {
//            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

//            dd($e);
        }

        if ($mail){
            return redirect()->back()->with('success','Mail Send Successfully..!!');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong')->withInput();
        }
    }










}
