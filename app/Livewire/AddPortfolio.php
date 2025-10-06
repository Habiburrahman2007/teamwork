<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Portfolio;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

class AddPortfolio extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $category = '';
    public $categories;
    public $image;
    #[Title('Add Portfolio')]

    #[Layout('layouts.app')]
    public function mount()
    {
        // Bisa hardcoded atau ambil dari DB
        $this->categories = Category::all();
    }
    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('portfolio-images', 'public');
        }

        Portfolio::create([
            'user_id' => Auth::id() ?? 1,
            'category_id' => $this->category,
            'title' => $this->title,
            'description' => $this->description,
            'image_url' => $imagePath,
            'created_date' => now(),
        ]);

        // Reset form
        $this->reset(['title', 'description', 'category', 'image']);

        session()->flash('success', 'Portfolio berhasil ditambahkan!');
    }

    public function render()
    {
        return view('livewire.add-portfolio');
    }
}
