<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use EloquentFilter\Filterable;

class Property extends Model  implements HasMedia
{
    use Filterable;
    use HasMediaTrait;
    //Qual tabela os dados serão salvos
    protected $table = 'properties';

    //Qual os dados que o usuário poderá alterar
    protected $fillable = [
        'id_client',
        'tipo',
        'title',
        'value_properties',
        'description',
        'location',
        'room',
        'bathroom',
        'meters',
        'status',

    ];

    public function registerMediaCollections()
    {
        $this
            ->addMediaConversion('thumb')
            ->width(1200)
            ->height(1200);
        //->withResponsiveImages();
    }


    //Relação de muitos para muitos.
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }


    public function modelFilter()
    {
        return $this->provideFilter(App\ModelFilters\CustomFilters\CustomUserFilter::class);
    }

    public function search(array $data, $totalPage)
    {
        $property = $this->where(function ($query) use ($data) {

            if (isset($data['tipo']))
                $query->where('tipo', $data['tipo']);

            if (isset($data['regiao']))
                $query->where('location', $data['regiao']);
        })->paginate($totalPage);

        return $property;
    }
}
