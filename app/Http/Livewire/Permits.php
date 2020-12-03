<?php

namespace App\Http\Livewire;

use App\Models\Permit;
use Livewire\Component;

class Permits extends Component
{
    public $permits;
    public $user_id;
    public $number;
    public $description;
    public $updateMode = false;

    private function resetInputFields()
    {
        $this->number = '';
        $this->description = '';
    }

    public function render()
    {
        $this->permits = Permit::all();
        return view('livewire.permits');
    }

    public function store()
    {
        $this->validate([
            'user_id' => 'required',
            'number' => 'required',
            'description' => 'max:255'
        ]);

        Permit::create([
            'user_id'     => $this->user_id,
            'number'      => $this->number,
            'description' => $this->description,
        ]);

        $this->resetInputFields();

    }
}
