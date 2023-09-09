<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $teste;
    public $novo;

    public function buscar()
    {
        $this->teste = $this->novo;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
