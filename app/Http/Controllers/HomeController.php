<?php

namespace App\Http\Controllers;

use App\Models\receita;
use DB;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        
        session_start();
        $id = $_SESSION['id'];
        $nome = $_SESSION['nome'];

        $receita = DB::select('select * 
                                 from receita 
                                where id_usuario = ?', array($id));
        $despesa = DB::select('select * 
                                from despesa 
                                where id_usuario = ?', array($id));

        $sumReceita = DB::table('receita')
                        ->where('id_usuario', $id)
                        ->sum('valor');

        $sumDespesa = DB::table('despesa')
                        ->where('id_usuario', $id)
                        ->sum('valor');

        $sobra = $sumReceita - $sumDespesa;

        //$totalReceita = $receita->sum('valor');

        //dd($id,$nome, $sumReceita, $sumDespesa, $sobra);

        return view ('dashboard', ['sobra' => $sobra,
                                   'sumReceita' => $sumReceita,
                                   'sumDespesa' => $sumDespesa]);
    }
}
