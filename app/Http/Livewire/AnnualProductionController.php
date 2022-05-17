<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AnnualProduction;
use App\Models\Orchard;


class AnnualProductionController extends Component
{
    public $annual_productions, $annual_production_id, $orchard_id, $ton_harvest, $date_production, $sale, $damage_percentage;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;


    public function render()
    {
        $this -> annual_productions = AnnualProduction::all();
        return view('livewire.annual_productions.annual-production-controller', [
            'orchards' => Orchard::all(),
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

        $this->orchard_id = '';
        $this->ton_harvest = '';
        $this->date_production = '';
        $this->sale = '';
        $this->damage_percentage = '';
    }


    public function store()
    {

        $this->validate([
            'orchard_id' => 'required',
            'ton_harvest' => 'required',
            'date_production' => 'required',
            'sale' => 'required',
            'damage_percentage' => 'required',
        ]);


        AnnualProduction::updateOrCreate(['id' => $this->annual_production_id], [
            'orchard_id' => $this->orchard_id,
            'ton_harvest' => $this->ton_harvest,
            'date_production' => $this->date_production,
            'sale' => $this->sale,
            'damage_percentage' => $this->damage_percentage,
        ]);

        session()->flash('message', $this->annual_production_id ? 'Produccion Anual Actualizada!' : 'Produccion Anual Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $annual_productions = AnnualProduction::findOrFail($id);
        $this->annual_production_id = $id;
        $this->orchard_id = $annual_productions->orchard_id;
        $this->ton_harvest = $annual_productions->ton_harvest;
        $this->date_production = $annual_productions->date_production;
        $this->sale = $annual_productions->sale;
        $this->damage_percentage = $annual_productions->damage_percentage;

        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        AnnualProduction::find($this->getid)->delete();
        session()->flash('message', 'Elemento Activo eliminado!');
        $this->closeModaldelete();
    }
}
