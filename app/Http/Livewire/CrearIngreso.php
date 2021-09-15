<?php

namespace App\Http\Livewire;

use App\Models\Ingreso;
use Livewire\Component;

class CrearIngreso extends Component
{

    public $tipoIngresos;
    public $observacion;
    public $idTipoIngreso = '';
    public $valor;

    protected $rules = [
        'idTipoIngreso' => 'required',
        'valor' => 'required|numeric|min:1'
    ];

    public function save(){

        $this->validate();

        Ingreso::create([
            'valor' => $this->valor,
            'id_tipo_ingreso' => $this->idTipoIngreso,
            'observaciones' => $this->observacion,
            'user_id' => auth()->user()->id
        ]);

        $this->reset(['observacion','idTipoIngreso','valor']);

        $this->emitTo('show-home','render');
    }

    public function render()
    {
        return view('livewire.crear-ingreso');
    }
}