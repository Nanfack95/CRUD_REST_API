<?php

namespace App\Http\Controllers;

use App\Models\Scategorie;
use Illuminate\Http\Request;

class ScategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scategories = Scategorie::with('categorie')->get()->toArray();
        return array_reverse($scategories);
        // return response()->json($scategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $scategorie = new Scategorie([
            'nomscategorie' => $request->input('nomscategorie'),
            'imagescat' => $request->input('imagescat'),
            'categorieID' => $request->input('categorieID'),
        ]);
        $scategorie->save();
        return response()->json('S/Categorie créée !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $scategorie = Scategorie::find($id);
        return response()->json($scategorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $scategorie = Scategorie::find($id);
        $scategorie->update($request->all());
        return response()->json('S/Catégorie MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $scategorie = Scategorie::find($id);
        $scategorie->delete();
        return response()->json('Scategorie supprimée !');
    }

    public function showSCategorieByCAT($idcat)
    {
        $scategorie = Scategorie::where('categorieID', $idcat)->with('categorie')->get()->toArray();
        return response()->json($scategorie);
    }
}
