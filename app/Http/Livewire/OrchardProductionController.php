<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AnnualProduction;
use App\Models\Orchard;
use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Support\Facades\DB;

class OrchardProductionController extends Component
{
    public $datos_huerto, $annual_productions, $annual_production_id, $orchard_id, $ton_harvest, $date_production, $sale, $damage_percentage;
    public $isModalOpen = 0;
    public $isconfirm = 0;
    public $getid = 0;


    public function render()
    {
        $id_orchard = Orchard::findOrFail($this->idd);
        $this->annual_productions = AnnualProduction::join("orchards", "orchards.id", "annual_productions.orchard_id")
            ->where("annual_productions.orchard_id", $this->idd)
            ->get();

        $data_harvest=$this->annual_production();
        $data_sales=$this->annual_production();
        return view('livewire.orchards_production_manager.new_production ', [
            'orchards' => Orchard::all(),
            'datos_orchard' => $id_orchard,
        ],
        compact( 'data_harvest', 'data_sales'));
    }

    public function annual_production(){
        $sales = AnnualProduction::selectRaw('MONTH(date_production) as date')
            ->groupBy('date')
            ->selectRaw('sum(sale) as production')
            ->pluck("production");
        //dd($sales);

        $tonHarvest = AnnualProduction::selectRaw('MONTH(date_production) as date')
            ->groupBy('date')
            ->selectRaw('sum(ton_harvest) as production')
            ->pluck("production");
        //dd($tonHarvest);

        $months = AnnualProduction::select(DB::raw("Month(date_production ) as month"))
            ->whereYear('date_production', date('Y'))
            ->groupBy(DB::raw("Month(date_production)"))
            ->pluck('month');
        //dd($months);

        
        $data_harvest = array(0, 0, 0,   0, 0, 0,   0, 0, 0,   0, 0, 0);
        foreach ($months as $i => $tonHarve) {
            $data_harvest[$tonHarve-1] = $tonHarvest[$i];
        }
        $data_sales = array(0, 0, 0,     0, 0, 0,   0, 0, 0,   0, 0, 0);
        foreach ($months as $i => $sale) {
            $data_sales[$sale-1] = $sales[$i];
        }
//dd($data_harvest);
//dd($data_sales);
        return $data_harvest;
        return $data_sales;
    }

    public function mount($id)
    {
        $this->orchard_id = $id;
        $this->idd = $id;
        $this->render();
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    public function openModaldelete()
    {
        $this->isconfirm = true;
    }

    public function closeModaldelete()
    {
        $this->isconfirm = false;
    }

    private function resetCreateForm()
    {

        $this->orchard_id = '';
        $this->ton_harvest = '';
        $this->date_production = '';
        $this->sale = '';
        $this->damage_percentage = '';
    }


    public function store()
    {

        $this->validate([
            'ton_harvest' => 'required',
            'date_production' => 'required',
            'sale' => 'required',
            'damage_percentage' => 'required',
        ]);

        $id_orchard = Orchard::findOrFail($this->idd);
        AnnualProduction::updateOrCreate(['id' => $this->annual_production_id], [
            'orchard_id' => $id_orchard->id,
            'ton_harvest' => $this->ton_harvest,
            'date_production' => $this->date_production,
            'sale' => $this->sale,
            'damage_percentage' => $this->damage_percentage,
        ]);
        //dd($id_orchard->id);
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

    public function ConfirmaDelete($id)
    {
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
