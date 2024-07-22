<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = ['First'];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }
    
    public function removeOption($index)
    {
        unset($this->options[$index]);
        //keep the array index in order
        $this->options = array_values($this->options);
    }
}
