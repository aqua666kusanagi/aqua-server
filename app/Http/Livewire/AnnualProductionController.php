<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AnnualProduction;
use App\Models\Orchard;


class AnnualProductionController extends Component
{
    public $annual_production, $annual_production_id, $orchard_id, $ton_harvest, $date_production, $sale, $damage_percentage;
    public $isDialogOpen = 0;


    public function render()
    {
        $this->annual_production = AnnualProduction::all();

        return view('livewire.annual_productions.annual-production-controller', [
            'orchard' => Orchard::all(),
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

        session()->flash('message', $this->annual_production_id ? 'Elemento Activo Actualizado!' : 'Elemento Activo Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $annual_production = AnnualProduction::findOrFail($id);
        $this->annual_production_id = $id;

        $this->orchard_id = $annual_production->orchard_id;
        $this->ton_harvest = $annual_production->ton_harvest;
        $this->date_production = $annual_production->date_production;
        $this->sale = $annual_production->sale;
        $this->damage_percentage = $annual_production->damage_percentage;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        AnnualProduction::find($id)->delete();
        session()->flash('message', 'Elemento Activo eliminado!');
    }
}