<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function add (Request $request) {
        $dados = $request->validate([
            'nome' => ['required'],
            'telefone' => ['required'],
            'email' => ['required']
        ]);

        Contact::create($dados);

        return true;
    }
}
