<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supply;
use App\Models\ProductCategory;

class SupplyController extends Component
{
    public $supply, $supply_id, $name, $registry_number, $data_sheet, $security_term, $product_category_id;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;


    public function render()
    {
        $this->supply = Supply::all();

        return view('livewire.supplies.supply-controller', [
            'product_categories' => ProductCategory::all()
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

    public function openModaldelete()
    {
        $this->isconfirm = true;
    }

    public function closeModaldelete()
    {
        $this->isconfirm = false;
    }

    private function resetCreateForm(){

        $this->name = '';
        $this->registry_number = '';
        $this->data_sheet = '';
        $this->security_term = '';
        $this->product_category_id = '';
    }


    public function store()
    {

        $this->validate([
            'name' => 'required',
            'registry_number' => 'required',
            'data_sheet' => 'required',
            'security_term' => 'required',
            'product_category_id' => 'required',
        ]);


        Supply::updateOrCreate(['id' => $this->supply_id], [
            'name' => $this->name,
            'registry_number' => $this->registry_number,
            'data_sheet' => $this->data_sheet,
            'security_term' => $this->security_term,
            'product_category_id' => $this->product_category_id,
        ]);

        session()->flash('message', $this->supply_id ? 'Suministro actualizado!' : 'Suministro Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $supply = Supply::findOrFail($id);
        $this->supply_id = $id;
        $this->name = $supply->name;
        $this->registry_number = $supply->registry_number;
        $this->data_sheet = $supply->data_sheet;
        $this->security_term = $supply->security_term;
        $this->product_category_id = $supply->product_category_id;

        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        Supply::find($this->getid)->delete();
        session()->flash('message', 'Suministro eliminado!');
        $this->closeModaldelete();
    }
}
