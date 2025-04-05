<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('categorie', 'scategorie')->get()->toArray();
        return array_reverse($articles);
        // return response()->json($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article([
            'caracteristiques' => $request->input('caracteristiques'),
            'designation' => $request->input('designation'),
            'marque' => $request->input('marque'),
            'reference' => $request->input('reference'),
            'qtestock' => $request->input('qtestock'),
            'prixAchat' => $request->input('prixAchat'),
            'prixVente' => $request->input('prixVente'),
            'prixSolde' => $request->input('prixSolde'),
            'imageartpetitf' => $request->input('imageartpetitf'),
            'imageartgrandf' => $request->input('imageartgrandf'),
            'categorieID' => $request->input('categorieID'),
            'scategorieID' => $request->input('scategorieID')
        ]);
        $article->save();
        return response()->json(['message' => 'Article créé avec succès']);
    }

    /**
     * Display the specified resource.
     */
    // public function show(Article $article)
    // {
    //     return response()->json($article);
    // }
    public function show($id)
    {
        $article = Article::find($id);
        return response()->json($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->update($request->all());
        // $article->save();
        return response()->json(['message' => 'Article modifié avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        // if (!$article) {
        //     return response()->json(['message' => 'Article non trouvé'], 404);
        // }
        $article->delete();
        return response()->json(['message' => 'Article supprimé avec succès']);
    }
}
