<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposito extends Model
{
    use HasFactory;
    protected $table = 'propositos';
    protected $connection = 'pgsql';
    protected $fillable = [
        'descricao',
        'baseLegal',
        'file',
    ];

    //PROPOSITO -->FORMULARIO
    public function formulario(){
    return $this->belongsTo(Formulario::class);
    }
}
