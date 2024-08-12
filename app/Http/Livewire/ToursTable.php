<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;
use Livewire\WithPagination;

class ToursTable extends Component
{
    use WithPagination;

    public $search = '';

    public $sortField;
    public $sortDirection = 'asc';

    public function sortBy($field) {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else $this->sortDirection = 'asc';
        $this->sortField = $field;
    }
    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.tours-table', [
            'tours' => Tour::search('destination', $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10)
        ]);
    }
}
