<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCandidate extends Model
{
    protected $table = 'candidates';
    protected $fillable = ['nome', 'cep', 'lougrado', 'telefone', 'email', 'celular', 'bairro', 'rua', 'numero', 'cidade','complemento', 'uf', 'resumo'];
}
