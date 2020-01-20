<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactsController extends AdminsController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(5);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.read', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        if(request()->contact_id){

            if(count(request()->contact_id)) {
                $first = Contact::whereIn('id', request()->contact_id)->first();

                $contacts = Contact::whereIn('id', request()->contact_id)->delete();

                if(count(request()->contact_id) == 1) {
                    request()->session()->flash('flash_success', 'O contato foi removido com sucesso.');
                } else if(count(request()->contact_id) > 1) {
                    request()->session()->flash('flash_success', 'Os contatos foram removidos com sucesso.');
                }
            } else if($contact) {
                $contact->delete();
                request()->session()->flash('flash_success', 'O contato foi removido com sucesso.');
            } else {
                request()->session()->flash('flash_error', 'O contato não foi encontrado para ser removido.');
            }
        } else{
            request()->session()->flash('flash_error', 'Selecione um item');
        }

        return redirect(route('contacts.index'));
    }
}
