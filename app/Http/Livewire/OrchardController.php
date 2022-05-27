<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Orchard;
use App\Models\TypeAvocado;
use App\Models\TypeTopography;
use App\Models\TypeSoil;
use App\Models\ClimateType;
use App\Models\User;
use App\Models\Phenophase;

use Livewire\WithFileUploads;


class OrchardController extends Component
{
    use WithFileUploads;

    public $orchards, $orchard_id,
        $type_avocado_id, $type_topography_id, $type_soil_id, $climate_type_id , $user_id,
        $name_orchard ,
        $path_image,
        $location_orchard,
        $point,
        $area,
        $altitude,
        $surface,
        $state,
        $creation_year,
        $planting_density,
        $irrigation;

    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;



    public function render()
    {
        $this->orchards = Orchard::all();

        return view('livewire.orchards.orchard-controller', [
        //return view('show_orchards.index', [
            'type_avocados' => TypeAvocado::all(),
            'type_topographies' => TypeTopography::all(),
            'type_soils' => TypeSoil::all(),
            'climate_types' => ClimateType::all(),
            'users' => User::all(),
            'phenophases' => Phenophase::all(),
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
        $this->type_avocado_id = '';
        $this->type_topography_id = '';
        $this->type_soil_id = '';
        $this->climate_type_id = '';
        //$this->user_id = '';//obtenerlo de la sesion
        $this->name_orchard = '';
        $this->path_image = '';
        $this->location_orchard = '';
        /*$this->point = '';
        $this->area = '';*/
        $this->altitude = '';
        $this->surface = '';
        $this->state = '';
        $this->creation_year = '';
        $this->planting_density = '';
        $this->irrigation = '';
    }


    public function store()
    {
        //dd($this->path_image);

        $this->validate([
            'type_avocado_id' => 'required|integer',
            'type_topography_id' => 'required|integer',
            'type_soil_id' => 'required|integer',
            'climate_type_id' => 'required|integer',
            //'user_id' => 'required',//obtenerlo de la sesion
            //'phenophase_id' => 'required|integer',//la fenofase se captura desde el monitoreo del huerto
            'name_orchard' => 'required|string',
            'path_image' => 'required',
            'location_orchard' => 'required|string',
            'point' => 'required',
            'area' => 'required',
            'altitude' => 'required',
            'surface' => 'required',
            'state' => 'required|integer',
            'creation_year' => 'required|numeric',
            'planting_density' => 'required|integer',
            'irrigation' => 'required',
        ]);
        $this->path_image=$this->path_image->store('images/orchards', 'public');
        //dd($this->path_image);



        Orchard::updateOrCreate(['id' => $this->orchard_id], [
            'type_avocado_id' => $this->type_avocado_id,
            'type_topography_id' => $this->type_topography_id,
            'type_soil_id' => $this->type_soil_id,
            'climate_type_id' => $this->climate_type_id,
            //'user_id' => $this->type_soil_id,
            //'phenophase_id' => $this->phenophase_id,
            'name_orchard' => $this->name_orchard,
            'path_image' => $this->path_image,
            'location_orchard' => $this->location_orchard,
            /*'point' => $this->type_soil_id,
            'area' => $this->type_soil_id,*/
            'altitude' => $this->altitude,
            'surface' => $this->surface,
            'state' => $this->state,
            'creation_year' => $this->creation_year,
            'planting_density' => $this->planting_density,
            'irrigation' => $this->irrigation,
        ]);

        session()->flash('message', $this->orchard_id ? 'Huerto Actualizado!' : 'Huerto Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $orchards = Orchard::findOrFail($id);
        $this->orchard_id = $id;
        $this->type_avocado_id = $orchards->type_avocado_id;
        $this->type_topography_id = $orchards->type_topography_id;

        $this->type_soil_id = $orchards->type_soil_id;
        $this->climate_type_id = $orchards->climate_type_id;
        //$this->user_id = $orchards->user_id;
        $this->phenophase_id = $orchards->phenophase_id;

        $this->name_orchard = $orchards->name_orchard;
        $this->path_image = $orchards->path_image;
        $this->location_orchard = $orchards->location_orchard;
        $this->point = $orchards->point;
        $this->area = $orchards->area;
        $this->altitude = $orchards->altitude;
        $this->surface = $orchards->surface;
        $this->state = $orchards->state;
        $this->creation_year = $orchards->creation_year;
        $this->planting_density = $orchards->planting_density;
        $this->irrigation = $orchards->irrigation;

        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        Orchard::find($this->getid)->delete();
        session()->flash('message', 'Huerto Removido!');
        $this->closeModaldelete();
    }
}
