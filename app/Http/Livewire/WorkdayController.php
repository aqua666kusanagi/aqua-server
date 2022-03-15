<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Workday;
use App\Models\User;
use App\Models\Orchard;



class WorkdayController extends Component
{
    public $workday, $workday_id,
            $user_id, $orchard_id,
            $date_work,
            $general_expenses;


    public $isDialogOpen = 0;


    public function render()
    {
        $this->workday = Workday::all();

        return view('livewire.workdays.workday-controller', [
            'user' => User::all(),
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

        $this->user_id = '';
        $this->orchard_id = '';
        $this->date_work = '';
        $this->general_expenses = '';
    }


    public function store()
    {
        
        $this->validate([
            'user_id' => 'required',
            'orchard_id' => 'required',
            'date_work' => 'required',
            'general_expenses' => 'required',
        ]);


        Workday::updateOrCreate(['id' => $this->workday_id], [
            'user_id' => $this->user_id,
            'orchard_id' => $this->orchard_id,
            'general_expenses' => $this->general_expenses,
        ]);

        session()->flash('message', $this->workday_id ? 'Dia de Trabajo Actualizado!' : 'Dia de Trabajo Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $workday = Workday::findOrFail($id);
        $this->workday_id = $id;
        $this->user_id = $workday->user_id;
        $this->orchard_id = $workday->orchard_id;
        $this->date_work = $workday->date_work;
        $this->general_expenses = $workday->general_expenses;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Workday::find($id)->delete();
        session()->flash('message', 'Dia de Trabajo eliminado!');
    }
}