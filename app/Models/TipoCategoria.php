<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCategoria extends Model
{
    protected $table = 'tipo_categoria';

    protected $fillable = ['id_categoria', 'nome'];

    public function admFinanceiro(){
        return $this->hasMany(AppChamado::class, 'categoria_id', 'id_categoria');
    }
}
