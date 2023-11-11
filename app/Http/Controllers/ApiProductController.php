<?php

namespace App\Http\Controllers;
use App\Models\Products as Pro;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      title="API shopping",
 *      version="1.0.0",
 *      description="esta es el api de nuetsra tienda online",
 *      @OA\Contact(
 *          email="richie@richie.com",
 *          name="Ricardo Lugo Recillas"
 *      ),
 *      @OA\License(
 *          name="Licencia",
 *          url="Apache"
 *      )
 * )
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
    public function indexall()
    {
        return  $prod = Pro::all();
    }


    /**
 * @OA\Get(
 *     path="/api/products/{id}",
 *     summary="Obtener un producto por identificador",
 *     description="Obtiene un producto específico según su identificador.",
 *     tags={"Products"},
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
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="No se encontró el producto."
 *     ),
 *     @OA\Response(
 *         response="default",
 *         description="Ha ocurrido un error."
 *     )
 * )
 */
    public function getProductById($id)
    {
        $product = Pro::find($id);

        if (!$product) {
            // Si no se encuentra el producto, devolver una respuesta 404
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        // Si se encuentra el producto, devolverlo en la respuesta
        return response()->json($product);
    }
}
