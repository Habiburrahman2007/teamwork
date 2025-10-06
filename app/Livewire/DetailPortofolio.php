<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class DetailPortofolio extends Component
{
    #[Layout('layouts.app')]
    #[Title('Detail Portfolio')]
    public $portfolio;

    public function mount($id)
    {
        $this->portfolio = Portfolio::with('category', 'likes', 'comments.user')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.detail-portofolio', [
            'portfolio' => $this->portfolio
        ]);
    }
}
