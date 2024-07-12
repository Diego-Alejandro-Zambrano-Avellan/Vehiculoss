<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Color;

class Vehiculo extends Component
{
    public $marca_id;
    public $modelo_id;
    public $color_id;
    public $vehiculos;
    public function mount()
    {
        $this->marca = Marca::all();
        $this->modelos = Modelo::all();
        $this->colores = Color::all();
        $this->vehiculos = Vehiculo::all();
    }
    public function render()
    {
        return view('livewire.vehiculo-component', [
            'marca' => $this->marca,
            'modelos' => $this->modelos,
            'colores' => $this->colores,
            'vehiculos' => $this->vehiculos,
        ]);
    }
    public function mostrar()
    {
        // Lógica para mostrar los vehículos (no se necesita en este caso)
    }
    
}
