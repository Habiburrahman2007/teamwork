<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;

class Comments extends Component
{
    public $portfolio;
    public $content;

    protected $rules = [
        'content' => 'required|string|max:500',
    ];

    public function submit()
    {
        $this->validate();

        Comment::create([
            'portfolio_id' => $this->portfolio->id,
            'user_id' => Auth::id(),
            'content' => $this->content,
        ]);

        $this->content = '';
        session()->flash('success', 'Comment added successfully!');
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments' => $this->portfolio->comments()->latest()->get(),
        ]);
    }
}

