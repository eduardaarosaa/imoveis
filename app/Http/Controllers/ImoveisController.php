<?php

namespace App\Http\Controllers;

use App\Property;
use App\Feature;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    private $property;
    public function __construct(Property $property)
    {
        $this->property = $property;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('painel/addImovel', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $property = $this->property->create($request->except('_token'));

        $property->features()->sync($request->input('feature'));

        if (isset($request['photos'])) {

            // $property->addMediaFromRequest('photo')->toMediaCollection('photo');

            foreach ($request->photos as $photo) {
                $property->addMedia($photo)
                    ->toMediaCollection();
            }
        }

        if (!empty($property)) {
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
        $property = Property::all();
        return view("painel/pesquisarImovel", compact('property'));
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

    public function BuscaImovel(Request $request)
    {
        //dd($request->all());
        $result = Property::where('id_client', $request->cpf)->first();
        return view('painel/resultadoImovel', compact('result'));
    }

    public function visualizar($id)
    {
        if (!$mensagem = $this->Contatos::find($id))
            return redirect()->back();
        return view('detalhesContatos', compact('mensagem'));
    }

    public function verImoveis()
    {
        $property = Property::all();
        return view("welcome", compact('property'));
    }
}
