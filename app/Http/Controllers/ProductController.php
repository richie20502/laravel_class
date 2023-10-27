<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Pro;
Use Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Pro::paginate(5);


        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'name' =>  'required|string|max:50',
                'description'  =>  'required|string|min:10|max:20',
                'price'  =>  'required|numeric|min:0|max:250',
                'stock'  => 'required|numeric|min:0|max:250',
            ]);
            Pro::create([
                'name' =>  $request->name,
                'description'  =>  $request->description,
                'price'  =>  $request->price,
                'stock'  =>  $request->stock,
            ]);
        } catch (Throwable $e) {


            dd($e);

            return false;
        }

        //Pro::create($request->all());  // decestrcuturacion
        Alert::success('Éxito','El producto se creo con éxito');

        return redirect()->route('products.index');


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

        $pro = Pro::find($id); //select * from products where id = 1
        $p = Pro::Where('id', $id)->get();
        //dump($pro);
        //dd($p);


        return view('products.update', compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $prod = Pro::find($id);
        //$prod2 = Pro::where('id',$id)->get();
        //dump($prod);
        //dd($prod2);

        $prod->name = $request->name;
        $prod->description = $request->description;
        $prod->price = $request->price;
        $prod->stock = $request->stock;
        $prod->save();
        Alert::success('Éxito','El producto se actualizo con éxito');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Pro::find($id);
        $prod->delete();
        Alert::success('Éxito','El producto se elimino con éxito');
        return redirect()->route('products.index');
    }
}
