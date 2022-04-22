<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsuerController extends Component
{
    public $Usuario, $user_id, $username, $email;
    public $idDialogOpen = 0;
    public function render()
    {
        $this->Usuario = User::all();
        return view('livewire.users.usuer-controller');
    }

    private function resetCreateForm(){
        $this->username = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        Unit::updateOrCreate(['id' => $this->unit_id], [
            'name' => $this->username,
            'email' => $this->email,
        ]);

        session()->flash('message', $this->unit_id ? '------!' : '---!');
        $this->resetCreateForm();
    }

    public function delete($id)
    {
        Unit::find($id)->delete();
        session()->flash('message', 'Usuario eliminado!');
    }
}
