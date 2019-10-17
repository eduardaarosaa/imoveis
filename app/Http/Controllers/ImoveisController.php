<?php

namespace App\Http\Controllers;

use Property;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    private $imovel;
    public function __construct(Property $propertys)
    {
        $this->property = $propertys;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel/addImovel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propertys = [
            'idcliente' => request['idcliente'],
            'tipo' => request['tipo'],
            'titulo' => request['titulo'],
            'valor' => request['valor'],
            'descricao' => resquest['descricao'],
            'localizacao' => request['localizacao'],
            'caracteristicas' => request['caracteristicas'],
            'foto' => request['foto']
        ];

        $check =  Property::create($propertys);
        if (!empty($check)) {
            toastr()->success('Imóvel cadastrado com sucesso');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao cadastrar um imóvel!!');
            header('Location: addImovel.php');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $propertys)
    {
        $propertys->features()->sync($request->input('feature'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("painel/pesquisarImovel");
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
}
