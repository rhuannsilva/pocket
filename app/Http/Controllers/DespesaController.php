<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    
    public function index()
    {
        $despesa = Despesa::all();
        return $despesa;
    }

    public function store(Request $request)
    {
        return response()
             ->json(Despesa::create($request->all()), status:201);

    }

    public function show(int $id)
    {
        $result = Despesa::find($id);
        return $result;
    }

    public function update(Request $request, int $id)
    {
        Despesa::where('id_despesa', $id)
               ->update($request->all());
    }

    public function destroy(int $id)
    {
        Despesa::destroy($id);
        return response()->noContent();
    }
}
