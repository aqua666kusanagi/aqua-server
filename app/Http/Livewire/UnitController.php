<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Unit;

class UnitController extends Component
{
    public $unit, $unit_id, $description;
    public $isDialogOpen = 0;

    public function render()
    {
        $this->unit = Unit::all();
        return view('livewire.unit.unit-controller');
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
        $this->description = '';
    }


    public function store()
    {
        $this->validate([
            'description' => 'required',
        ]);

        Unit::updateOrCreate(['id' => $this->unit_id], [
            'description' => $this->description,
        ]);

        session()->flash('message', $this->unit_id ? 'Unidad actualizado!' : 'Unidad Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        $this->unit_id = $id;
        $this->description = $unit->description;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Unit::find($id)->delete();
        session()->flash('message', 'Unidad eliminado!');
    }
}