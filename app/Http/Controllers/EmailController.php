<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{

    public function index()
    {
        return view('template.email');
    }

    public function store(Request $request) {

        Mail::send('template.email', array(
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'mensagem' => $request->input('mensagem')

        ), function ($message) {
            $message->from('gabrielrhodden@gmail.com');
            $message->to('gabrielrhodden@gmail.com')->subject('Mensagem do site');
        });

        return redirect("/template/email")->with('msg', true);


    }

}
