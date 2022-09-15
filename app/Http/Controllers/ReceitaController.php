<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{

    public function index()
    {
        $receita = Receita::all();
        return $receita;
    }

    public function store(Request $request)
    {
        return response()
             ->json(Receita::create($request->all()), status:201);
    }

    public function show(int $id)
    {
        $result = Receita::find($id);
        return $result; 
    }

    public function update(Request $request, int $id)
    {
        Receita::where('id_receita', $id)
               ->update($request->all());
    }

    public function destroy(int $id)
    {
        Receita::destroy($id);
        return response()->noContent();
    }
}
