<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kontakt');
    }

    public function store(Request $request)
    {
        //walidacja
        $this->validate(request(),[
            'imiek' => 'required|regex:/[A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząśńężźłćó]{1,19}/u',
            'nazwiskok' => 'required|regex:/([A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząęśżźłńćó]{1,19})(-?[A-ZĄĘŃŚŹŻŁĆÓ]{1}[a-ząńęśżźłćó]{1,19})?/u',
            'emailk' => 'required|email',
            'numerTelk' => 'required|regex:/[0-9]{9}/u',
            'wiadomosc'  => 'required|between:20,250'
            ]);
        filter_var($request, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $contact= new Contact();

        $contact->imie= $request['imiek'];
        $contact->nazwisko= $request['nazwiskok'];
        $contact->mail= $request['emailk'];
        $contact->telefon= $request['numerTelk'];
        $contact->wiadomosc= $request['wiadomosc'];
        $contact->data= now();
        $contact->save();

        return redirect()->back()->with('success', 'Wiadomość została wysłana!');
    }
}
