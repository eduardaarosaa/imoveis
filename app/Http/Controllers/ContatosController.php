<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Contatos;

class ContatosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $result = Contatos::orderBy('id', 'DESC')->get();
        return view('painel/verContatos', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contato = [
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone'),
            'assunto' => request('assunto')
        ];

        $check =  Contatos::create($contato);
        if (!empty($check)) {
            toastr()->success('Contato enviado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao enviar essa mensagem!!!');
            header('Location: contato.php');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contato = $this->contatos->get();
        return view('painel/verContatos', compact('contato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Contatos::find($id)->delete();

        if (!empty($delete)) {
            toastr()->success('Apagado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao apagar!!!');
            return redirect()->back();
        }
    }
    public function formContato()
    {

        return view('contatos');
    }
    public function visualizar($id)
    {
        if (!$mensagem = Contatos::find($id))
            return redirect()->back();
        return view('painel/detalhesContatos', compact('mensagem'));
    }
}
