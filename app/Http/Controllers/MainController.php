<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function secondPage() {


        return view('second-page');
    }

    public function sendForm(Request $request) {
        Session::put('fio', $request->get('fio'));
        Session::put('password', $request->get('password'));

        $a = $request->get('email');
        $b = $request->get('password');

        Storage::disk('local')->put('fio.txt', "Логин $a, пароль $b");

        return redirect()->route('secondPage')->with('data', $request->except('_token'));
    }
}
