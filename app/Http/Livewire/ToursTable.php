<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;
use Livewire\WithPagination;

class ToursTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.tours-table', [
            'tours' => Tour::search('destination', $this->search)->paginate(5)
        ]);
    }
}
