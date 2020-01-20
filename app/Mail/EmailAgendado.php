<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contact;

class EmailAgendado extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**

     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data['qtd'] = Contact::where('new_contact', 1)->get()->count() > 0 ? Contact::where('new_contact', 1)->get()->count() : 'Nenhum contato novo' ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS', 'gabriellavidal2013@gmail.com'))
            ->markdown('emails.email-agendado');
    }
}
