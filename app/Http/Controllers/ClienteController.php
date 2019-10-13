<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;


class ClienteController extends Controller
{

    private $client;

    public function __construct(Clientes $client)
    {
        $this->clientes = $client;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel/addCliente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $client = [
            'cpf' => request('cpf'),
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone')
        ];

        $check =  Clientes::create($client);
        if (!empty($check)) {
            toastr()->success('Cliente cadastrado com sucesso');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao cadastrar um cliente!!!');
            header('Location: addCliente.php');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $client = $this->clientes->get();
        return view('painel/consultaClientes', compact('client'));
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
    public function buscarCliente(Request $request)
    {
        $result = Clientes::where('cpf', $request->cpf)->first();
        return view('painel/resultadoBusca', compact('result'));
    }
}
