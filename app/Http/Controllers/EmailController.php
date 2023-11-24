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


    public function template()
    {
        return view('template.templateMail');
    }

    //incluido esse [] argumento pois o metodo send por padrão são 3 argumentos
    public function store(Request $request)
    {
        $data = ["email" => $request->input('email'),'assunto' => $request->input('assunto'),];

        $sent = Mail::send('template.templateMail', $data, function ($message) use ($data) {
            $message->from('gabrielrhodden@gmail.com');
            $message->to($data['email'])->subject($data["assunto"]);
        });

        if ($sent) {
            return back()->with('msg', 'E-mail enviado com sucesso!');
        } else {
            return back()->with('msg', 'Erro ao enviar o e-mail. Por favor, tente novamente.');
        }
    }



}
