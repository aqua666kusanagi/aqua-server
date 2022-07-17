<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\RegistrationPhenophase;
use App\Models\Orchard;
use App\Models\Phenophase;

class OrchardManagerController extends Component
{
    public $datos, $registration_phenophases_id, $orchard_id, $phenophase_id, $date, $comments;
    public $modalCreate=0;
    public $isconfirm =0;
    public $getid =0;

    public function render()
    {
        $this->datos = RegistrationPhenophase::all();
        return view('livewire.manager_orchards.orchard-manager-controller',[
            'orchards' => Orchard::all(),
            'phenophases' => Phenophase::all()
        ]);
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->modalCreate = true;
    }

    public function closeModalPopover()
    {
        $this->modalCreate = false;
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
        $this->registration_phenophases_id = '';
        $this->phenophase_id = '';
        $this->orchard_id = '';
        $this->date = '';
        $this->comments = '';
    }

    public function store()
    {
        $this->validate([
            'phenophase_id' => 'required',
            'orchard_id' => 'required',
            'date' => 'required',
            'comments' => 'required'
        ]);

        RegistrationPhenophase::updateOrCreate(['id' => $this->registration_phenophases_id], [
            'phenophase_id' => $this->phenophase_id,
            'orchard_id' => $this->orchard_id,
            'date' => $this->date,
            'comments' => $this->comments
        ]);

        session()->flash('message', $this->registration_phenophases_id ? 'Registro actualizado!' : 'Registro Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $registro = RegistrationPhenophase::findOrFail($id);
        $this->registration_phenophases_id = $id;
        $this->phenophase_id = $registro->phenophase_id;
        $this->orchard_id = $registro->orchard_id;
        $this->date = $registro->date;
        $this->comments = $registro->comments;

        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        RegistrationPhenophase::find($this->getid)->delete();
        session()->flash('message', 'Registro eliminado!');
        $this->closeModaldelete();
    }
}
