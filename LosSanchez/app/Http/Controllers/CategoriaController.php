<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $categories=DB::table('categories')->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','DESC') ->paginate(10);
            return view('Vistas.Categorias.Index',["categories"=>$categories,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Vistas.Categorias.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaRequest $request)
    {
        //
        $categorie= new Categories;
        $categorie->name=$request->get('name');
        $categorie->created_at=$request->get('created_at');
        $categorie->menus_id=$request->get('menus_id');
        $categorie->save();
        return Redirect::to('Vistas/Categorias');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return view("Vistas.Categorias.Show",["categories"=>Categories::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view("Vistas.Categorias.Edit",["categories"=>Categories::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaRequest $request, $id)
    {
        //
        $categorie=Categories::findOrFail($id);
        $categorie->name=$request->get('name');
        $categorie->created_at=$request->get('created_at');
        $categorie->update();
        return Redirect::to("Vistas/Categorias");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categorie=Categories::findOrFail($id);
        $categorie->delete();
        return Redirect::to("Vistas/Categorias");
    }
}
