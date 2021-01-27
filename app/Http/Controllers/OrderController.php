<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('orders')->where('id_uzytkownika', Auth::user()->id)->get();
        return view('koszyk', ['data' => $data]);
    }

    public function store(Request $request)
    {

        //walidacja
        $this->validate(request(), [
            'imie' => 'required|regex:/[A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząśńężźłćó]{1,19}/u',
            'nazwisko' => 'required|regex:/([A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząęśżźłńćó]{1,19})(-?[A-ZĄĘŃŚŹŻŁĆÓ]{1}[a-ząńęśżźłćó]{1,19})?/u',
            'email' => 'required|email',
            'adres' => 'required|regex:/([A-ZĄĘŚŹŻŃŁĆÓ]{1}[a-ząęśżńźłćó]{1,19}[\s]{0,})+/u',
            'telefon' => 'required|regex:/[0-9]{9}/u',
            'www' => 'required',
            'nr_domu' => 'required|regex:/^\d+[a-zA-Z]*$/u',
            'kod_pocztowy' => 'required|regex:/\d{2}-\d{3}/u',
            'check' => 'required|between:1,50'
        ]);
        filter_var($request, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (Auth::check()) {
            $order = new Order();
            $order->id_uzytkownika = Auth::user()->id;
            $order->imie = $request['imie'];
            $order->nazwisko = $request['nazwisko'];
            $order->mail = $request['email'];
            $order->adres = $request['adres'];
            $order->nr_domu = $request['nr_domu'];
            $order->kod_pocztowy = $request['kod_pocztowy'];
            $order->telefon = $request['telefon'];
            $order->www = $request['www'];
            $order->opcje = "";
            foreach ($request['check'] as $item) {
                $order->opcje .= $item . ";";
            }
            $order->data = now();
            $order->save();

            return redirect()->back()->with('success', 'Zamówienie zostało złożone!');
        } else
            return redirect()->back()->with('fail', 'Wystąpił błąd przy składaniu zamówienia');
    }

    public function edit($id)
    {
        $order = Order::find($id)->where('id_uzytkownika', Auth::user()->id)->where('id', $id)->get();
        return view('edit', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        if (Auth::user()->id != $order->id_uzytkownika) {
            return back()->with('fail', 'Nie udało się usunąć zamówienia');
        }
        if ($order->delete()) {
            return redirect()->back()->with('success', 'Zamówienie usunięte!');
        } else return back();
    }

    public function update(Request $request, $order)
    {
        if (Auth::check()) {
            //walidacja
            $this->validate(request(), [
                'imie' => 'required|regex:/[A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząśńężźłćó]{1,19}/u',
                'nazwisko' => 'required|regex:/([A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząęśżźłńćó]{1,19})(-?[A-ZĄĘŃŚŹŻŁĆÓ]{1}[a-ząńęśżźłćó]{1,19})?/u',
                'email' => 'required|email',
                'adres' => 'required|regex:/([A-ZĄĘŚŹŻŃŁĆÓ]{1}[a-ząęśżńźłćó]{1,19}[\s]{0,})+/u',
                'telefon' => 'required|regex:/[0-9]{9}/u',
                'www' => 'required',
                'nr_domu' => 'required|regex:/^\d+[a-zA-Z]*$/u',
                'kod_pocztowy' => 'required|regex:/\d{2}-\d{3}/u',
                'check' => 'required|between:1,50'
            ]);
            filter_var($request, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $input = $request->all();
            $order = Order::find($order);
            $order->imie = $input['imie'];
            $order->nazwisko = $input['nazwisko'];
            $order->mail = $input['email'];
            $order->adres = $input['adres'];
            $order->nr_domu = $input['nr_domu'];
            $order->kod_pocztowy = $input['kod_pocztowy'];
            $order->telefon = $input['telefon'];
            $order->www = $input['www'];
            $order->opcje = "";
            foreach ($input['check'] as $item) {
                $order->opcje .= $item . ";";
            }
            $order->save();
            return redirect()->back()->with('success', 'Zamówienie zaktualizowane!');
        }
    }
}
