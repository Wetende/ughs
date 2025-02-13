<?php

namespace App\Livewire;

use App\Models\County;
use Livewire\Component;

class NationalityAndStateInputFields extends Component
{
    public $county;
    public $searchTerm = '';
    public $counties = [];

    protected $rules = [
        'county' => 'required|exists:counties,id',
    ];

    public function mount()
    {
        // Set default county if not set (Uasin Gishu)
        if (!$this->county) {
            $defaultCounty = County::where('name', 'Uasin Gishu')->first();
            $this->county = $defaultCounty ? $defaultCounty->id : null;
        }
        
        // Initialize counties list
        $this->counties = County::orderBy('name')->get();
    }

    public function updatedSearchTerm()
    {
        if (empty($this->searchTerm)) {
            $this->counties = County::orderBy('name')->get();
        } else {
            $this->counties = County::where('name', 'like', '%' . $this->searchTerm . '%')
                                  ->orderBy('name')
                                  ->get();
        }
    }

    public function updatedCounty()
    {
        $county = County::find($this->county);
        $this->dispatch('county-updated', ['county' => $county->name]);
    }

    public function render()
    {
        return view('livewire.nationality-and-state-input-fields');
    }
}
