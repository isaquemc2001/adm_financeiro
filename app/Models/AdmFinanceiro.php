<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmFinanceiro extends Model
{
    protected $table = 'adm_financeiro';

    protected $fillable = ['id_financeiro', 'titulo', 'valor', 'categoria_id', 'descricao'];

    public function tipo_categoria(){
        return $this->belongsTo(TipoCategoria::class, 'categoria_id', 'id_categoria');
    }
}
