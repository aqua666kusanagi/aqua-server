<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Phenophase;


class PhenophaseController extends Component
{
    public $pheno, $pheno_id, $phenophase;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;


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
        $this->validate([
            'phenophase.required' => '',
        ]);
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

        $this->phenophase = '';
    }

    protected $message = [
        'phenophase.required' => 'Este campo debe estar lleno',
    ];

    public function store()
    {

        $this->validate([
            'phenophase' => 'required|alpha_num',
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

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        Phenophase::find($this->getid)->delete();
        session()->flash('message', 'Fenofase eliminado!');
        $this->closeModaldelete();
    }
}
