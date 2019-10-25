<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\QueroImovel;

class QueroImovelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = QueroImovel::all();
        return view('painel/queroImovel', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $queroImovel = [
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone'),
            'tipo' => request('tipo'),
            'regiao' => request('regiao'),
            'valor' => request('valor'),
            'assunto' => request('assunto')
        ];
        $check =  QueroImovel::create($queroImovel);
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
    public function show($id)
    {
        //
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
        $delete = QueroImovel::find($id)->delete();

        if (!empty($delete)) {
            toastr()->success('Apagado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao apagar!!!');
            return redirect()->back();
        }
    }

    public function formQueroImovel()
    {

        return view('formQueroImovel');
    }

    public function visualizar($id)
    {
        if (!$mensagem = QueroImovel::find($id))
            return redirect()->back();
        return view('painel/detalhesQueroImovel', compact('mensagem'));
    }
}
