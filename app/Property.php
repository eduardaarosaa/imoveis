<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Property extends Model  implements HasMedia
{
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
        'status',
    ];

    public function registerMediaCollections()
    {
        $this
            ->addMediaConversion('thumb')
            ->width(275)
            ->height(220);
        //->withResponsiveImages();
    }

    //Relação de muitos para muitos.
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
