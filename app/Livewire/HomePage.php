<?php

namespace App\Livewire;

use id;
use Livewire\Component;
use App\Models\Portfolio;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class HomePage extends Component
{
    public $portfolios;

    #[Layout('layouts.app')]
    #[Title('Dashboard page')]
    public function mount()
    {
        $this->portfolios = Portfolio::with('likes', 'category')->latest()->take(6)->get();
    }

    public function loadPortfolios()
    {
        $this->portfolios = Portfolio::with('category')
            ->withCount('likes')
            ->latest()
            ->take(6)
            ->get();
    }

    public function like($portfolioId)
    {
        $portfolio = Portfolio::find($portfolioId);
        $user = auth()->user();

        if (!$portfolio || !$user) return;

        $existingLike = $portfolio->likes()->where('user_id', $user->id)->first();

        if ($existingLike) {
            // Kalau sudah like → unlike
            $existingLike->delete();
        } else {
            // Kalau belum → tambahkan like baru
            $portfolio->likes()->create(['user_id' => $user->id]);
        }

        $this->loadPortfolios(); // refresh tampilan
    }




    public function render()
    {
        return view('livewire.home-page');
    }
}
