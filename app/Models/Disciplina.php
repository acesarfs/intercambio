<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;

class Disciplina extends Model
{
    use HasFactory;

    const tipo = [
        'Optativa',
        'Obrigatoria',
    ];

    protected $guarded = ['id'];

    public function record(){
        return $this->belongsTo(Pedido::class);
    }
}