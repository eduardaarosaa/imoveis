<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\QueroVender;

class QueroVenderController extends Controller
{
    private $queroVender;
    public function __construct(QueroVender $queroVender)
    {
        $this->QueroVender = $queroVender;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel/venderImovel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $queroVender = [
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone'),
            'tipo' => request('tipo'),
            'regiao' => request('regiao'),
            'valor' => request('valor'),
            'assunto' => request('assunto')
        ];

        $check =  QueroVender::create($queroVender);
        if (!empty($check)) {
            toastr()->success('Contato enviado com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao enviar essa mensagem!!!');
            header('Location: queroVender.php');
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
        //
    }
    public function formQuerovender()
    {
        return view('queroVenderImoveis');
    }
}
