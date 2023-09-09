<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $teste;
    public $novo;
    public $outro;


    public $count = 1;

    public function buscar()
    {

        $this->teste = $this->novo;
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
