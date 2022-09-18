<?php

namespace App\Http\Controllers;

use App\Mail\contactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ContactanosController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'Required',
            'email' => 'Required|email',
            'texto' => 'Required',
        ]);



        $correo = new contactanosMailable($request->all());

        Mail::to('elkhouryghassan712@gmail.com')->send($correo);

        return view('welcome');
    }
}
