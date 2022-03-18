<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Phenophase;


class PhenophaseController extends Component
{
    public $pheno, $pheno_id, $phenophase;
    public $isDialogOpen = 0;


    public function render()
    {
        $this->pheno = Phenophase::all();

        return view('livewire.phenophases.phenophase-controller');
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

        $this->phenophase = '';
    }


    public function store()
    {
        
        $this->validate([
            'phenophase' => 'required',
        ]);


        Phenophase::updateOrCreate(['id' => $this->pheno_id], [
            'phenophase' => $this->phenophase,
        ]);

        session()->flash('message', $this->pheno_id ? 'Fenofase Actualizado!' : 'Fenofase Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $pheno = Phenophase::findOrFail($id);
        $this->pheno_id = $id;
        $this->phenophase = $pheno->phenophase;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Phenophase::find($id)->delete();
        session()->flash('message', 'Fenofase eliminado!');
    }
}