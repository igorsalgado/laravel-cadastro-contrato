<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    public function convenioServico()
    {
        return $this->belongsTo(ConvenioServico::class, 'convenio_servico_codigo', 'codigo');
    }
}
