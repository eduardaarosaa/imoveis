<?php

namespace App\Http\Controllers;

use App\Property;
use App\Feature;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    private $totalPage = 8;
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
        //dd($request->photos);


        $property = $this->property->create($request->except('_token'));

        $property->features()->sync($request->input('feature'));

        if (isset($request['photos'])) {

            // $property->addMediaFromRequest('photo')->toMediaCollection('photo');

            // foreach ($request->photos as $photo) {
            //     $property->addMedia($photo) ->toMediaCollection('imagesFromProperties');
            $property->addMultipleMediaFromRequest(['photos'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection();
                });
        }

        if (!empty($property)) {
            toastr()->success('Imóvel cadastrado com sucesso');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao cadastrar um imóvel!!');
            header('Location: addImovel.php');
        }
    }

    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
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
        $property = Property::orderBy('id', 'DESC')->paginate($this->totalPage);
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

        $features = Feature::all();
        $consulta =  Property::find($id);
        return view('painel/testeImoveis', ['property' => $consulta, 'features' => $features]);
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
        $property = Property::findOrFail($id);

        $property->id_client = $request->id_client;
        $property->tipo = $request->tipo;
        $property->title = $request->title;
        $property->value_properties = $request->value_properties;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->room = $request->room;
        $property->bathroom = $request->bathroom;
        $property->meters = $request->meters;

        $property->features()->sync($request->input('feature'));

        if (count($property->media) > 0) {
            foreach ($property->media as $media) {
                if (!in_array($media->file_name, $request->input('property', []))) {
                    $media->delete();
                }
            }
        }
    
        $media = $property->media->pluck('file_name')->toArray();
    

        


        foreach ($request->input('property', []) as $file) {
                if (count($media) === 0 || !in_array($file, $media)) {
                    $property->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection();
                }
            }

        $property->save();

        if (!empty($property)) {
            toastr()->success('Imóvel alterado com sucesso');
            return view('home');
        } else {
            toastr()->error('Erro ao alterar um imóvel!!!');
            return view('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Property::find($id)->delete();

        if (!empty($delete)) {
            toastr()->success('Imóvel excluído com sucesso!!!');
            return redirect()->back();
        } else {
            toastr()->error('Erro ao excluir!!!');
            return redirect()->back();
        }
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

    public function verImoveis(Property $property)
    {

        $properties = Property::orderBy('id', 'desc')->paginate(6);
        return view('welcome', compact('properties'));
    }

    public function filtrarImovel(Request $request, Property $property)
    {
        $dataForm = $request->except('_token');

        $property =  $property->search($dataForm, $this->totalPage);

        //dd(empty($property));

        return view('retornoImovel', compact('property', 'dataForm'));
    }

    public function detalhesImoveis($id)
    {

        if (!$detalhes = Property::find($id))

            return redirect()->back();
        return view('detalhes', compact('detalhes'));
    }

    public function teste(){

        return view('painel/testeImoveis');
    }
}
