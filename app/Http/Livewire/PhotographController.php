<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Photograph;
use App\Models\Orchard;
use App\Models\TypePhotograph;

class PhotographController extends Component
{
    public $photograph, $photograph_id, $orchard_id, $type_photopgraph_id, $file, $date;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;

    public function render()
    {
        $this->photograph = Photograph::all();
        return view('livewire.photographs.photograph-controller', [
            'orchards' => Orchard::all(),
            'type_photographs' => TypePhotograph::all()
        ]);
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isDialogOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isDialogOpen = false;
    }

    public function openModaldelete()
    {
        $this->isconfirm = true;
    }

    public function closeModaldelete()
    {
        $this->isconfirm = false;
    }

    private function resetCreateForm(){
        $this->orchard_id = '';
        $this->type_photopgraph_id = '';
        $this->file = '';
        $this->date = '';
    }

    public function store()
    {
        $this->validate([
            'orchard_id' => 'required',
            'type_photograph_id' => 'required',
            'file' => 'required',
            'date' => 'required',
        ]);

        Photograph::updateOrCreate(['id' => $this->photograph_id], [
            'orchard_id' => $this->orchard_id,
            'type_photograph_id' => $this->orchard_id,
            'file' => $this->file,
            'date' => $this->date
        ]);

        session()->flash('message', $this->photograph_id ? 'Fotografia actualizada!' : 'Fotografia Creada!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $fotografia = Photograph::findOrFail($id);
        $this->photograph_id = $id;
        $this->orchard_id = $fotografia->orchard_id;
        $this->type_photopgraph_id = $fotografia->type_photograph_id;
        $this->file = $fotografia->file;
        $this->date = $fotografia->date;
        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        Photograph::find($this->getid)->delete();
        session()->flash('message', 'Fotografia eliminada!');
        $this->closeModaldelete();
    }
}
