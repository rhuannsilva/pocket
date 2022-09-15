<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use HasFactory;

    protected $table = 'despesa';

    public $timestamps = false;

    protected $primaryKey = 'id_despesa';

    protected $fillable = [
                           'id_despesa',
                           'id_usuario',
                           'valor',
                           'descricao',
                           'tipo_despesa',
                           'data_vencimento',
                           'data_cria'];
                        
}
