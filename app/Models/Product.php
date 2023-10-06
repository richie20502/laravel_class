<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #especifica el nombre de la tabla dentro de base de datos
    protected $table = "product";

    #especifica la llave primaria de la tabla
    protected $primaryKey = "id";

    #para los campos created_at y updated_at
    public $timestamps = false;

    #columnas existentes dentro de tu tabla
    protected $fillable = ['name','description','price','stock'];

    #esconde columnas especificas
    protected $hidden =['created_at','updated_at'];

}
