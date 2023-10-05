<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    #esta es la variable que hace referecía a una tabla
    protected $table ='moodle_product';

    #esta es la variable que indica la llave primaría
    protected $primaryKey = 'id';

    #hace referencia a created_at y updated_at
    public $timestamps = true;

    #especificacion de la columnas dentro de la tabla
    protected $fillable = [
        'name','description','price','stock'
    ];

    #oculta columnas del modelo
    protected $hidden = ['created_at','updated_at'];




}
