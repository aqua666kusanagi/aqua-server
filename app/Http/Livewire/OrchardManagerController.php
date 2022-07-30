<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\RegistrationPhenophase;
use App\Models\Orchard;
use App\Models\Phenophase;

class OrchardManagerController extends Component
{
    public $orchard_id=0, $nav=0;
    public $datos, $registration_phenophases_id, $phenophase_id, $date, $comments;
    public $modalCreate=0;
    public $isconfirm =0;
    public $getid =0;

    public function render()
    {
        if ($this->nav == 1){
            $datos=$this->informacion();
            //dd($datos);,['datos'=>$datos]
            return view('livewire.manager_orchards.orchard-manager-controller',['datos_orchard'=>$datos]);
            dd("render de orchard manager");
        }else{
            dd("entra en el else");
            $this->datos = RegistrationPhenophase::all();
            return view('livewire.manager_orchards.fenofase',[
            'orchards' => Orchard::all(),
            'phenophases' => Phenophase::all()
            ]);
        }
    }

    public function mount($id){
        $this->orchard_id=$id;
        $this->nav=1;
        $this->render();
    }

    public function informacion()
    {
        $datos = Orchard::findOrFail($this->orchard_id);
        //dd($datos);
        return $datos;
    }

}
