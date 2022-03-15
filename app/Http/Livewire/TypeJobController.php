<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypeJob;

class TypeJobController extends Component
{
    //Definimos variables a usar
    public $Jobs, $type_job, $type_job_id;
    public $isDialogOpen = 0;

    public function render()
    {
        $this->Jobs = TypeJob::all();
        return view('livewire.type_jobs.type-job-controller');
    }

    public function create(){
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover(){
        $this->isDialogOpen = true;
    }

    public function closeModalPopover(){
        $this->isDialogOpen = false;
    }

    public function resetCreateForm(){
        $this->type_job = '';
    }

    public function store(){
        $this->validate([
            'type_job' => 'required',
        ]);

        TypeJob::updateOrCreate(['id' => $this->type_job_id], [
            'type_job' => $this->type_job,
        ]);

        session()->flash('message', $this->type_job_id ? 'tipo de trabajo actualizada' : 'tipo de trabajo agregada');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id){
        $type_Jobs = TypeJob::findOrFail($id);
        $this->type_job_id = $id;
        $this->type_job = $type_Jobs->type_job;
        $this->openModalPopover();
    }

    public function delete($id){
        TypeJob::find($id)->delete();
        session()->flash('message', 'Trabajo removida!');
    }
}
