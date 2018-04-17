<?php
/**
 * Created by PhpStorm.
 * User: mpthuispc
 * Date: 4-4-18
 * Time: 14:35
 */

namespace App\Http\Controllers;

use App\ContactUS;
use Illuminate\Http\Request;
use Mail;


class ContactMailController extends Controller
{

    /**
     * Show a list of all available flights.
     *
     * @return Response
     */
    public function index()
    {
        $contacts = ContactUS::all();

        foreach ($contacts as $contact) {
            $name = $contact->name;
            $email = $contact->email;
            $subject = $contact->subject;
            $user_message = $contact->user_message;
        }
        $count = $contacts->count();
        return view('whoareyou', compact('name', 'email', 'user_message', 'subject','count'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS(){
        return view('/whotocontact');
    }

    /**
     * Show the application dashboard.
     *
     * @param  Request  $request
     * @return Response
     */

    public function contactUSPost(Request  $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);


        Mail::send('partials.mail_send_info',
            array(
                'subject'=>$request->get('subject'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('adfsdfgsdfg@adsfsdfg.nl');
                $message->to('m.peltenburg@gmail.com', 'Admin')->subject('Contact info');
            });

        ContactUS::create($request->all());

        return back()->with('success', 'Thanks for contacting us!');
    }
}