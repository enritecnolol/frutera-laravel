<?php

namespace Frutas;

use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{

    protected $fillable = ['name', 'description', 'precio'];


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categorias()
    {
        return $this->belongsToMany(Categorias::class);
    }

}
