<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;
use Livewire\Attributes\Layout;

class HomePage extends Component
{
    public $portfolios;
    #[Layout('layouts.app')]
    public function mount()
    {
        $this->portfolios = Portfolio::latest()->take(6)->get(); 
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
