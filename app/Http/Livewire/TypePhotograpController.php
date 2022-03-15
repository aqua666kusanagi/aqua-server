<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypePhotograph;

class TypePhotograpController extends Component
{
    //Definimos variables a usar
    public $photograp, $type_photograph, $type_photograph_id;
    public $isDialogOpen = 0;

    public function render()
    {
        $this -> photograp = TypePhotograph::all();
        return view('livewire.type_photograps.type-photograp-controller');
    }

    public function create(){
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover(){
        $this->isDialogOpen = true;
    }

    public function closeModalPopover(){
        $this->isDialogOpen = false;
    }

    public function resetCreateForm(){
        $this->type_photograph = '';
    }

    public function store(){
        $this->validate([
            'type_photograph' => 'required',
        ]);

        TypePhotograph::updateOrCreate(['id' => $this->type_photograph_id], [
            'type_photograph' => $this->type_photograph,
        ]);

        session()->flash('message', $this->type_photograph_id ? 'tipo de fotografia actualizada' : 'tipo de fotografia agregada');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id){
        $type_photograp = TypePhotograph::findOrFail($id);
        $this->type_photograph_id = $id;
        $this->type_photograph = $type_photograp->type_photograph;
        $this->openModalPopover();
    }

    public function delete($id){
        TypePhotograph::find($id)->delete();
        session()->flash('message', 'Fotografia removida!');
    }
}
