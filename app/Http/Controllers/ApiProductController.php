<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
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
    *      path="/api/products",
    *    tags={"Products"},
    *       @OA\Response(
    *           response=200,
    *           description="mostrar todos los productos"
    *       )
    *)
     */
    public function index()
    {
        $pro = Products::all();
        return $pro;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        *     )
        *
        *)
     */

    public function getProductById($id)
    {
        $product = Products::find($id);

        return response()->json($product);
    }
}
