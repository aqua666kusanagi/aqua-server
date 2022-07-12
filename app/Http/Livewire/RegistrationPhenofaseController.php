<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RegistrationPhenophase;
use App\Models\Orchard;
use App\Models\Phenophase;

class RegistrationPhenofaseController extends Component
{
    public $registration, $registration_phenophases_id, $orchard_id, $phenophase_id, $date, $comments/*,$registros*/;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;

    public function render()
    {
        //$this->registration = RegistrationPhenophase::all();
        $registros = RegistrationPhenophase::all();
        /*return view('livewire.registro_phenophase.registration-phenofase-controller',[
            'orchards' => Orchard::all(),
            'phenophases' => Phenophase::all()
        ]);*/
        return view('livewire.orchards.fenofase',[
            'orchards' => Orchard::all(),
            'phenophases' => Phenophase::all()
        ],compact('registros'));
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

    public function Fenofase($id_orchard){
        $registros=RegistrationPhenophase::all();
        $huerto=Orchard::findOrFail($id_orchard);
        //dd($this->registros);
        return view('livewire.orchards.fenofase',compact('huerto','registros'));
    }
    public function addfenofase(){
        return view('livewire.registro_phenophase.create',[
            'orchards' => Orchard::all(),
            'phenophases' => Phenophase::all()
        ]);
    }
}
