<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ChemicalElement;

class ChemicalElementController extends Component
{
    public $chemical_elements, $name, $chemical_code,$chemical_element_id;
    public $isDialogOpen = 0;

    public function render()
    {
        $this->chemical_elements = ChemicalElement::all();
        return view('livewire.chemical_elements.chemical-element-controller');
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
        $this->name = '';
        $this->chemical_code = '';
    }

    protected $messages = [
        'name.required' => 'Este campo no debe de estar vacio',
        'chemical_code.required' => 'Este campo no debe de estar vacio'
    ];

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'chemical_code' => 'required',
        ]);

        ChemicalElement::updateOrCreate(['id' => $this->chemical_element_id], [
            'name' => $this->name,
            'chemical_code' => $this->chemical_code,
        ]);

        session()->flash('message', $this->chemical_element_id ? 'Chemical Element updated!' : 'Chemical Element created!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $chemical_element = ChemicalElement::findOrFail($id);
        $this->chemical_element_id = $id;
        $this->name = $chemical_element->name;
        $this->chemical_code = $chemical_element->chemical_code;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        ChemicalElement::find($id)->delete();
        session()->flash('message', 'Chemical Element removed!');
    }
}
