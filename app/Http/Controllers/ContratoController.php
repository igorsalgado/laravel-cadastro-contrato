<?php

namespace App\Http\Controllers;

use App\Models\Contrato;


class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::with(['convenioServico.convenio.banco'])->get();

        return view('contratos.index', compact('contratos'));
    }

}
