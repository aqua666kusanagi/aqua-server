<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypeTopography;

class TypeTopographicController extends Component
{
    //Definimos variables a usar
    public $topograp, $type_topography, $type_topography_id;
    public $isDialogOpen = 0;

    public function render()
    {
        $this->topograp = TypeTopography::all();
        return view('livewire.type_topographic.type-topographic-controller');
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
        $this->type_topography = '';
    }

    public function store(){
        $this->validate([
            'type_topography' => 'required',
        ]);

        TypeTopography::updateOrCreate(['id' => $this->type_topography_id], [
            'type_topography' => $this->type_topography,
        ]);

        session()->flash('message', $this->type_topography_id ? 'tipo de topografia actualizada' : 'tipo de tipo de topografia agregada');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id){
        $type_topograp = TypeTopography::findOrFail($id);
        $this->type_topography_id = $id;
        $this->type_topography = $type_topograp->type_topography;
        $this->openModalPopover();
    }

    public function delete($id){
        TypeTopography::find($id)->delete();
        session()->flash('message', 'Topografia removida!');
    }
}
