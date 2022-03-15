<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClimateType;


class ClimateTypeController extends Component
{
    public $climate_types, $climate_types_id, $climate_type;
    public $isDialogOpen = 0;


    public function render()
    {
        $this->climate_types = ClimateType::all();

        return view('livewire.climate_types.climate-type-controller');
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

        $this->type_soil = '';

    }


    public function store()
    {
        
        $this->validate([
            'climate_type' => 'required',
        ]);


        ClimateType::updateOrCreate(['id' => $this->climate_types_id], [
            'climate_type' => $this->climate_type,

        ]);

        session()->flash('message', $this->climate_types_id ? 'Tipo de Climas actualizado!' : 'Tipo de Climas Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $climate_types = ClimateType::findOrFail($id);
        $this->climate_types_id = $id;
        $this->climate_type = $climate_types->climate_type;


        $this->openModalPopover();
    }

    public function delete($id)
    {
        ClimateType::find($id)->delete();
        session()->flash('message', 'Tipo de Climas eliminado!');
    }
}