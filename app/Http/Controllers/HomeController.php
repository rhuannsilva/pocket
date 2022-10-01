<?php

namespace App\Http\Controllers;

use App\Models\receita;
use DB;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        
        //dd($_SESSION['id'],
            //$_SESSION['nome']);
        session_start();
        $id = $_SESSION['id'];
        $nome = $_SESSION['nome'];

        $receita = DB::select('select * 
                                 from receita 
                                where id_usuario = ?', array($id));

        $despesa = DB::select('select * 
                                 from despesa 
                                where id_usuario = ?', array($id));

        //$totalReceita = $receita->sum('valor');

        dd($id,$nome);
    }
}
