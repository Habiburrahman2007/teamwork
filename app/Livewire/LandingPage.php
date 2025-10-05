<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class LandingPage extends Component
{
    #[Layout('layouts.LP')]
    #[Title('Landing Page')]
    public $portfolios;
    public function mount()
    {
        $this->portfolios = Portfolio::latest()->take(6)->get(); 
    }
    public function render()
    {
        return view('livewire.landing-page');
    }
}
