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

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
