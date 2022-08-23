<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Photograph;
use App\Models\Orchard;
use App\Models\TypePhotograph;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class OrchardPhotographController extends Component
{
    use WithFileUploads;
    public $photographs, $photograph_id, $orchard_id, $type_photograph_id, $path, $date;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;
    public $idd;

    public function render()
    {
        $id_orchard = Orchard::findOrFail($this->idd);
        //dd($id_orchard->id);
        //$this->photographs = Photograph::all();
        //$this->photographs = Photograph::all()->where('photographs.orchard_id', $id_orchard->id);
        //$this->photographs = DB::select('select * from photographs where photograph.orchard_id ', $id_orchard->id);
        $this->photographs = Photograph::join("orchards", "orchards.id", "photographs.orchard_id")
            ->where("photographs.orchard_id", $id_orchard->id)
            ->get();
        return view('livewire.orchards_photographs.photographs_index', [
            'orchards' => Orchard::all(),
            'type_photographs' => TypePhotograph::all(),
            'datos_orchard' => $id_orchard,
        ]);
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
        $this->type_photograph_id = '';
        $this->path = '';
        $this->date = '';
    }

    public function store()
    {

        $this->validate([
            'type_photograph_id' => 'required',
            'path' => 'required',
            'date' => 'required',
        ]);
        $this->path=$this->path->store('images/photographs', 'public');
        //dd($this->path);
        $id_orchard = Orchard::findOrFail($this->idd);
        Photograph::updateOrCreate(['id' => $this->photograph_id], [
            'orchard_id' => $id_orchard->id,
            'type_photograph_id' => $this->type_photograph_id,
            'path' => $this->path,
            'date' => $this->date
        ]);

        session()->flash('message', $this->photograph_id ? 'Fotografia actualizada!' : 'Fotografia Creada!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $photographs = Photograph::findOrFail($id);
        $this->photograph_id = $id;
        $this->orchard_id = $photographs->orchard_id;
        $this->type_photograph_id = $photographs->type_photograph_id;
        $this->path = $photographs->path;
        $this->date = $photographs->date;
        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        Photograph::find($this->getid)->delete();
        session()->flash('message', 'Fotografia eliminada!');
        $this->closeModaldelete();
    }
}
