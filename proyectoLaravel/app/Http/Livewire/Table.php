<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Table extends Component
{
    public $mesa;
    public $id;

    public function mount($mesa)
    {
        $this->id = $mesa->id;
    }

    public function render()
    {
        $table = Table::find($this->id);

        return view('livewire.table', compact('table'));
    }
}
