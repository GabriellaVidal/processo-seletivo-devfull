<?php

namespace App\Traits;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAgendado;
use App\Models\Contact;


trait Agendamento 
{ 
	public function send()
    {
        $mail = new EmailAgendado();
        $mail->subject('Quantidade de Contato');


        Mail::to(env('MAIL_FROM_ADDRESS', 'gabriellavidal2013@gmail.com'))->send($mail);

        if(Mail::failures()){
            return "problemas";
        }else {
            $contacts = Contact::get();

            foreach ($contacts as $contact) {
                $contact->new_contact = 0;
                $contact->save();
            }
            return "enviado";
        }
    }
    
}