<?php

namespace App\Http\Livewire;

//use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ConfirmDelete extends ModalComponent
{
    public function render()
    {
        return view('livewire.confirm-delete');
    }
}
