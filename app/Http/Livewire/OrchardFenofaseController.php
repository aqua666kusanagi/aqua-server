<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Orchard;
use App\Models\Phenophase;
use App\Models\RegistrationPhenophase;

class OrchardFenofaseController extends Component
{
    public $fenofases, $orchard_id , $idd, $registration_phenophases_id, $phenophase_id, $date, $comments;

    public $isDialogOpen= 0;
    public $isconfirm =0;
    public $getid =0;

    public function render()
    {
        $this->fenofases=$this->fenofase();
        $id_orchard=Orchard::findOrFail($this->idd);
        return view('livewire.manager_orchards.orchard-fenofase-controller',[
            'phenophases' => Phenophase::all(),
            'datos_orchard' => $id_orchard,
        ]);
    }

    public function mount($id){
        $this->orchard_id=$id;
        $this->idd=$id;
        $this->render();
    }

    public function fenofase()
    {
        $datos=RegistrationPhenophase::join("orchards","orchards.id","registration_phenophases.orchard_id")
                                        ->where("registration_phenophases.orchard_id",$this->idd)
                                        ->get();
        return $datos;
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
