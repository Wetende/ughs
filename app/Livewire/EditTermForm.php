<?php

namespace App\Livewire;

use App\Models\Term;
use Livewire\Component;

class EditTermForm extends Component
{
    public Term $term;

    public function render()
    {
        return view('livewire.edit-term-form');
    }
}
