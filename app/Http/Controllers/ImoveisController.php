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
        if (isset($request['photo'])) {
            $property->addMediaFromRequest('photo')->toMediaCollection('photo');
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
