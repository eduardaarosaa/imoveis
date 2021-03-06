<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Quando vc da um use na classe, vc n;ao precisa injetar ela pelo construct
use App\QueroVender;

class QueroVenderController extends Controller
{
    private $totalPage = 5;
    // construct com injeção de dependecias foi deletado

    public function index()
    {
        $result = QueroVender::orderBy('id', 'DESC')->paginate($this->totalPage);
        return view('painel/venderImovel', compact('result'));
    }

    public function create()
    {

        // esse código é desnecessário, pois o método CREATE deve uma view
        // de acordo com os padrões. O mesmo deverias estar dentro do método STORE
        // pois assim vc conseguiria acessar a request sem usar esse helper request()
        // e sim $request->nome, $request->email....

        $queroVender = [
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone'),
            'tipo' => request('tipo'),
            'regiao' => request('regiao'),
            'valor' => request('valor'),
            'assunto' => request('assunto')
        ];

        $check = QueroVender::create($queroVender);

        if (!empty($check)) {
            toastr()->success('Contato enviado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao enviar essa mensagem!!!');

            // aqui acredito que não funcionaria pois o ideal seria
            // redirect()->route('nome.da.sua.rota');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {

        // código do store para exemplo

        $queroVender = QueroVender::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'tipo' => $request->tipo,
            'regiao' => $request->regiao,
            'valor' => $request->valor,
            'assunto' => $request->assunto,
        ]);

        if ($queroVender) {

            // aqui retornaria para listagem de produtos

        } else {
            // aqui também, porém com a mensagem de erro.
        }
    }

    public function show(QueroVender $result)
    {

        // por conveção, a listagem do itens deveria ficar no método INDEX
        // pois no método SHOW é para listar apenas 1


    }

    public function edit($id)
    { }

    public function update(Request $request, $id)
    { }

    public function destroy($id)
    {

        $delete = QueroVender::find($id)->delete();

        if (!empty($delete)) {
            toastr()->success('Apagado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao apagar!!!');
            return redirect()->back();
        }
    }

    public function formQuerovender()
    {
        return view('queroVenderImoveis');
    }
    public function visualizar($id)
    {
        if (!$mensagem = QueroVender::find($id))
            return redirect()->back();
        return view('painel/detalhesQueroVender', compact('mensagem'));
    }
}
