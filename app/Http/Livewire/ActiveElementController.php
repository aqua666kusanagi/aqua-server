<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ActiveElement;
use App\Models\ChemicalElement;
use App\Models\Supply;


class ActiveElementController extends Component
{
    public $active_element, $active_element_id, $chemical_element_id, $supply_id,$percentage;
    public $isDialogOpen = 0;


    public function render()
    {
        $this->active_element = ActiveElement::all();

        return view('livewire.active_elements.active-element-controller', [
            'chemical_elements' => ChemicalElement::all(),
            'supplies' => Supply::all(),
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

        $this->chemical_element_id = '';
        $this->supply_id = '';
        $this->percentage = '';
    }


    public function store()
    {
        
        $this->validate([
            'chemical_element_id' => 'required',
            'supply_id' => 'required',
            'percentage' => 'required',
        ]);


        ActiveElement::updateOrCreate(['id' => $this->active_element_id], [
            'chemical_element_id' => $this->chemical_element_id,
            'supply_id' => $this->supply_id,
            'percentage' => $this->percentage,
        ]);

        session()->flash('message', $this->active_element_id ? 'Elemento Activo Actualizado!' : 'Elemento Activo Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $active_element = ActiveElement::findOrFail($id);
        $this->active_element_id = $active_element;
        $this->chemical_element_id = $active_element->name;
        $this->supply_id = $active_element->registry_number;
        $this->percentage = $active_element->data_sheet;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        ActiveElement::find($id)->delete();
        session()->flash('message', 'Elemento Activo eliminado!');
    }
}