<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplicationMode;

class ApplicationModeController extends Component
{
    //DEFINIMOS UNAS VARIABLES A USAR
    public $aplication, $description, $application_mode_id;
    public $isDialogOpen = 0;

    public function render()
    {
        $this -> aplication = ApplicationMode::all();
        return view('livewire.application_modes.application-mode-controller');
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

    protected $messages = [
        'description.required' => 'Este campo deve estar lleno',
    ];

    public function store()
    {
        $this->validate([
            'description' => 'required',
        ]);

        ApplicationMode::updateOrCreate(['id' => $this->application_mode_id], [
            'description' => $this->description,
        ]);

        session()->flash('message', $this->application_mode_id ? 'Aplication mode updated!' : 'Aplication mode created!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $aplication_mode = ApplicationMode::findOrFail($id);
        $this->application_mode_id = $id;
        $this->description = $aplication_mode->description;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        ApplicationMode::find($id)->delete();
        session()->flash('message', 'Aplication Mode removed!');
    }
}
