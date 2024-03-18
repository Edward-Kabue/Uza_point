<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;

class SearchPage extends Component
{
    use WithPagination;

  
    public function render()
    {
        return view('livewire.search-page');
    }
}