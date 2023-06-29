<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'provincia',
        'municipio',
        'bairro',
        'genero',
        'rg',
        'bi',
        'nome_mae',
        'nome_pai',
        'telefone',
        'dt_nascimento',
        'nome',
        'sobre_nome',
        'imagem',
        'local_desaparecimento',
        'dt_desaparecimento',
        'relato_desaparecimento',
        'localizado',
        'condicoes_desaparecimento',
        'longitude',
        'cor_pele',
        'cor_olho',
        'latitude'
    ];



}