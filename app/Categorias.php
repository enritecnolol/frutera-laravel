<?php

namespace Frutas;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = ['categoria', 'descripcion', 'slug'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function frutas()
    {
        return $this->belongsToMany(Fruta::class);
    }
}
