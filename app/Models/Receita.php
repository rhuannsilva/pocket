<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;

    protected $table = 'receita';

    public $timestamps = false;

    protected $primaryKey = 'id_receita';

    protected $fillable = [
                           'id_receita',
                           'id_usuario',
                           'valor',
                           'descricao',
                           'tipo_despesa',
                           'data_cria'
    ];
}
