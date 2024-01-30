<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public function search($query)
    {
        $this->dispatch('searching', query: $query);
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
