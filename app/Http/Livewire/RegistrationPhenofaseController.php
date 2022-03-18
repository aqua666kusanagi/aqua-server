<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RegistrationPhenophase;
use App\Models\Orchard;
use App\Models\Phenophase;

class RegistrationPhenofaseController extends Component
{
    public $registration, $registration_phenophases_id, $orchard_id, $phenophase_id, $date, $comments;
    public $isDialogOpen = 0;

    public function render()
    {
        $this->registration = RegistrationPhenophase::all();
        return view('livewire.registro_phenophase.registration-phenofase-controller',[
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
        $this->isDialogOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isDialogOpen = false;
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
            'coments' => 'required'
        ]);

        RegistrationPhenophase::updateOrCreate(['id' => $this->registration_phenophases_id], [
            'workday_id' => $this->phenophase_id,
            'type_job_id' => $this->orchard_id,
            'cost' => $this->date,
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
        $this->phenophase_id = $registro->phenophases_id;
        $this->orchard_id = $registro->orchard_id;
        $this->date = $registro->date;
        $this->comments = $registro->comments;
        $this->openModalPopover();
    }

    public function delete($id)
    {
        RegistrationPhenophase::find($id)->delete();
        session()->flash('message', 'Registro eliminado!');
    }
}
