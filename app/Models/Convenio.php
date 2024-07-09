<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;

    protected $table = 'convenios';

    public function banco()
    {
        return $this->belongsTo(Banco::class, 'banco_codigo', 'codigo');
    }
}
