<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class SiteController extends Controller {

    public function index() {

        $title = "AdvanceRope | Home";

        return view('Site.Home.index', compact('title'));
    }

    public function sobre() {

        $title = "AdvanceRope | Sobre";

        return view('Site.Somos.index', compact('title'));
    }

    public function cliente() {

        $title = "AdvanceRope | Clientes";

        return view('Site.Clientes.index', compact('title'));
    }

    public function orcamento() {

        $title = "AdvanceRope | Orcamento";

        return view('Site.Orcamento.index', compact('title'));
    }

    public function servicos() {

        $title = "AdvanceRope | Nossos Serviços";

        return view('Site.Servicos.index', compact('title'));
    }

    public function trabalhe() {

        $title = "AdvanceRope | Trabalhe Conosco";

        return view('Site.Trabalhe.index', compact('title'));
    }

    public function contato() {

        $title = "AdvanceRope | Contato";

        return view('Site.Contato.index', compact('title'));
    }

    public function contact(Request $request) {

        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|min:3|max:100',
            'telefone' => 'required|min:9|max:20',
            'subject' => 'required|min:1|max:100',
            'descricao' => 'required|min:1|max:500',
        ]);

        $dataForm = $request->all();

        $mail = Mail::send(new ContatoEmail($dataForm));

        return redirect('/contato')
                        ->with(['success' => 'E-mail enviado com sucesso, Entramos em contato com você em breve']);
    }

    public function enviar() {


        $title = "AdvanceRope | Trabalhe Conosco";

        return view('Site.Trabalhe.index', compact('title'));
    }

}
