<?php
namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use \Nexmo\Client\Credentials\Basic;
use \Nexmo\Client;
use App\Models\Smstemplate;

class NexmoSMSController extends Controller
{
    public function index(Request $request)
    {
        $template=Smstemplate::Where('id',$request->template_id)->get()->first();
        try {

            $basic  = new Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
            $client = new Client($basic);

            $receiverNumber = "8801677444438";
            $message = $template->description;



            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'Excelit Ai',
                'text' => $message,


            ]);

            $notification = array(
                'message' =>  ' Sms Send  Sucessyfuly',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);;

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
    public function Sms()
    {

        $smstemplates=Smstemplate::latest()->get();
       return view('backend.sms.sendsms',compact('smstemplates'));
    }
}
