<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address ="m.peltenburg@gmail.com";

        $name = 'Mwalima Peltenburg';

        $subject = 'Web Wonder Woman Email';

        return $this->view('partials.mail_send_info', compact('name'));

//            ->from($address, $name)
//
//            ->subject($subject);
    }
}
