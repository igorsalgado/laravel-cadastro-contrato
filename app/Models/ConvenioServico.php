<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvenioServico extends Model
{
    use HasFactory;

    protected $table = 'convenio_servicos';

    public function convenio()
    {
        return $this->belongsTo(Convenio::class, 'convenio_codigo', 'codigo');
    }
}
