<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Imc extends Component
{
    public $height = '';
    public $weight = '';
    public $imc;

    public function updated($weight, $height)
    {
        if(isset($this->height) && $this->height != 0){
            $w = (float)$this->weight;
            $h = (int)$this->height / 100;
            
            $this->imc = $w / ($h^2);
        }
    }

    public function render()
    {

        return view('livewire.imc');
    }
}
