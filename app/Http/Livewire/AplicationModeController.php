<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplicationMode;

class AplicationModeController extends Component
{
    //DEFINIMOS UNAS VARIABLES A USAR
    public $aplication, $description, $aplication_mode_id;

    public function render()
    {
        $this -> aplication = ApplicationMode::all();
        return view('livewire.aplication_modes.aplication-mode-controller');
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

        AplicationMode::updateOrCreate(['id' => $this->aplication_mode_id], [
            'description' => $this->description,
        ]);

        session()->flash('message', $this->aplication_mode_id ? 'Aplication mode updated!' : 'Aplication mode created!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $aplication_mode = AplicationMode::findOrFail($id);
        $this->aplication_mode_id = $id;
        $this->description = $aplication_mode->description;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        ApplicationMode::find($id)->delete();
        session()->flash('message', 'Aplication Mode removed!');
    }
}
