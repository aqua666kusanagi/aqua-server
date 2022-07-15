<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\RegistrationPhenophase;
use App\Models\Orchard;

class OrchardManagerController extends Component
{
    public $datos,$huertos;
    public $modal=false;
    public function render()
    {
        $this->datos = RegistrationPhenophase::all();
        return view('livewire.manager_orchards.orchard-manager-controller');
    }

}
