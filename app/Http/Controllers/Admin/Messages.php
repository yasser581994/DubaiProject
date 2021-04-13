<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailJob;
use App\Mail\yasserMail;
use App\Models\Contact;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\DeclareDeclare;

class Messages extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $message=Message::create($request->only(['name','email','message','phone','utm_source','utm_medium']));
        dispatch(new SendmailJob($message))->delay(Carbon::now()->addSeconds(5));
           return redirect()->back()->with('success' , 'your message has been sent ');

    }
    public function getMessages()
    {
        return view('backend.messages.messages')->with('messages',Message::all());

    }
    public function deleteMessage(Request $request)
    {
        $message_id = $request->message_id ;
        Message::find($message_id)->delete();
        return response()->json([
            'status'=>true ,
            'id'=>$message_id ,
            'count_messages'=>count(Message::all())
        ]);


    }
    public function readMessage(Request $request)
    {
        $message = Message::find($request->message_id);

        $message->update([
            'status'=>'read'
        ]);

        return response()->json([
            'status'=>'true',
            'message_status'=>'read' ,
            'message_id'=>$request->message_id
        ]);

    }

    public function readMessageMail($mailID){
        $message = Message::find($mailID);
        if($message)
        {
            $message->update([
                'status'=>'read'
            ]);
        }
        return redirect()->route('message.index');

    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }



}
