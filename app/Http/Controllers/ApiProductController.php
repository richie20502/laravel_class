<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

/**
 * @OA\Info(
 *      title="esto es un api",
 *      version="1.0.0",
 *      description="descripcion a al api",
 *      @OA\Contact(
 *          email="tucorrer@correo.com",
 *          name="Tu nombre"
 *      )
 * )
 *
 *
 *
 *
 *
 */

class ApiProductController extends Controller
{

    /**
    * @OA\Get(
    *     path="/api/products",
    *     tags={"Products"},
    *     summary="Mostrar productos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los productos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index(){
        return Products::all();
    }

    /**
     * @OA\Get(
        * path="/api/products/{id}",
        *     tags={"Products"},
    *     summary="Obtener un producto por identificador",
    *     description="Obtiene un producto específico según su identificador.",
    *     @OA\Parameter(
    *         name="id",
    *         in="path",
    *         required=true,
    *         description="Identificador único del producto",
    *         @OA\Schema(
    *             type="integer",
    *             format="int64"
    *         )
    *     ),
    *     @OA\Response(
 *         response=200,
 *         description="Producto obtenido exitosamente."
 *      )
     * )
     */
    public function getProductById($id){
        $pro = Products::find($id);

        return response()->json($pro);

    }
}
