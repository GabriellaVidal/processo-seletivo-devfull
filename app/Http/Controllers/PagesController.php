<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use App\Models\Contact;
use App\Models\File;
use App\Mail\Contact as ContatoMail;
use App\Http\Requests\Contact as ContactRequest;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function sendContact(ContactRequest $request)
    {
        $file = new File();
        $contato = new Contact();
        $contato = $contato->fill($request->all());
        $mail = new ContatoMail($request);
        $mail->subject('Contato');
        
        if ($request->curriculum) {
            $imageName = $file->upload($request);
            $file->filename = $imageName;
            $file->path = 'uploads/'.$imageName;
            $file->save();
            if($file->contacts()->save($contato)){


                Mail::to(env('MAIL_FROM_ADDRESS', 'gabriellavidal2013@gmail.com'))->send($mail);

                if(Mail::failures())
                    return redirect()->to(route('index'))->with('flash_error', 'Tente Novamente');
                else
                    return redirect()->to(route('index'))->with('flash_success', 'Contato enviado com sucesso');
            }
        }
        
    }
}
