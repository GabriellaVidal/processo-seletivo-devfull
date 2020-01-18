<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\Contact as ContatoMail;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function sendContact()
    {
       
        $mail = new ContatoMail(request()->all());
        $mail->subject('Contato');
        
        Mail::to(['scholae@gmail.com'])->send($mail);

        if(Mail::failures())
            return redirect()->to(route('index'))->with('flash_error', 'Tente Novamente');
        else
            return redirect()->to(route('index'))->with('flash_success', 'Contato enviado com sucesso');
        
    }
}
