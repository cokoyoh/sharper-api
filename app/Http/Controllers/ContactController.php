<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getMessage()
    {
        $sender = request('email');
        $receiver = 'info@sharper-innovations.co.ke';

        Mail::send('mails.contact-us',
            array(
                'name' => request('full_name'),
                'email' => request('email'),
                'phone_number' => request('phone_number'),
                'user_message' => request('text')
            ), function($message)
            {
                $sender = request('email');
                $receiver = 'info@sharper-innovations.co.ke';
                $message->from($sender);
                $message->to($receiver , 'Admin')->subject('Website Email');
            });

        return response(['message' => 'Email sent successfully. Thank you.'],200);
    }
}
