<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CursoDisciplina extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'it_id_curso',
        'it_id_disciplina',
        
    ];
}
