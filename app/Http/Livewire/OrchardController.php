<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Orchard;
use App\Models\TypeAvocado;
use App\Models\TypeTopography;
use App\Models\TypeSoil;
use App\Models\ClimateType;
use App\Models\User;

use Livewire\WithFileUploads;


class OrchardController extends Component
{
    use WithFileUploads;
    
    public $orchard, $orchard_id, 
        $type_avocado_id, $type_topography_id, $type_soil_id, $climate_type_id , $user_id , 
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



    public function render()
    {
        $this->orchard = Orchard::all();

        return view('livewire.orchards.orchard-controller', [
        //return view('show_orchards.index', [
            'type_avocados' => TypeAvocado::all(),
            'type_topographies' => TypeTopography::all(),
            'type_soils' => TypeSoil::all(),
            'climate_types' => ClimateType::all(),
            'users' => User::all(),
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
        /*$this->type_avocado_id = '';
        $this->type_topography_id = '';
       
        $this->type_soil_id = '';
        $this->climate_type_id = '';
        $this->user_id = '';//obtenerlo de la sesion

*/
        $this->name_orchard = '';
        /*$this->path_image = '';*/
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

        $path=$this->path_image->store('images', 'public');
        dd($path);
        /*
        $this->validate([
            'type_avocado_id' => 'required',
            'type_topography_id' => 'required',
            
            'type_soil_id' => 'required',
            'climate_type_id' => 'required',

            //'user_id' => 'required',//obtenerlo de la sesion
        


            'name_orchard' => 'required',
            //'path_image' => 'required',
            'location_orchard' => 'required',
            //'point' => 'required',
            'area' => 'required',
            'altitude' => 'required',
            'surface' => 'required',
            'state' => 'required',
            'creation_year' => 'required',
            'planting_density' => 'required',
            'irrigation' => 'required',

        ]);
*/


        Orchard::updateOrCreate(['id' => $this->orchard_id], [
            'type_avocado_id' => $this->type_avocado_id,
            'type_topography_id' => $this->type_topography_id,
            
            'type_soil_id' => $this->type_soil_id,
            'climate_type_id' => $this->type_soil_id,
            //'user_id' => $this->type_soil_id,


            'name_orchard' => $this->type_soil_id,
            /*'path_image' => $this->type_soil_id,*/
            'location_orchard' => $this->type_soil_id,
            /*'point' => $this->type_soil_id,
            'area' => $this->type_soil_id,*/
            'altitude' => $this->type_soil_id,
            'surface' => $this->type_soil_id,
            'state' => $this->type_soil_id,
            'creation_year' => $this->type_soil_id,
            'planting_density' => $this->type_soil_id,
            'irrigation' => $this->type_soil_id,
        ]);

        session()->flash('message', $this->orchard_id ? 'Huerta Actualizado!' : 'Huerta Creada!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $orchard = Orchard::findOrFail($id);
        $this->orchard_id = $id;
        $this->type_avocado_id = $orchard->type_avocado_id;
        $this->type_topography_id = $orchard->type_topography_id;
        
        $this->type_soil_id = $orchard->type_soil_id;
        $this->climate_type_id = $orchard->climate_type_id;
        //$this->user_id = $orchard->user_id;
        

        $this->name_orchard = $orchard->name_orchard;
        /*$this->path_image = $orchard->path_image;*/
        $this->location_orchard = $orchard->location_orchard;
        /*$this->point = $orchard->point;
        $this->area = $orchard->area;*/
        $this->altitude = $orchard->altitude;
        $this->surface = $orchard->surface;
        $this->state = $orchard->state;
        $this->creation_year = $orchard->creation_year;
        $this->planting_density = $orchard->planting_density;
        $this->irrigation = $orchard->irrigation;
        

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Orchard::find($id)->delete();
        session()->flash('message', 'Huerta eliminada!');
    }
}