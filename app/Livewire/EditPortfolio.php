<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditPortfolio extends Component
{
    use WithFileUploads;

    public $portfolioId;
    public $title = '';
    public $description = '';
    public $category = '';
    public $image; // temporary uploaded file
    public $existingImageUrl; // path stored in DB
    public $categories;

    public function mount($id)
    {
        $this->portfolioId = $id;
        $portfolio = Portfolio::findOrFail($id);

        // hak akses: hanya owner yang boleh edit
        if ($portfolio->user_id !== (Auth::id() ?? 0)) {
            abort(403);
        }

        // isi property dari DB
        $this->title = $portfolio->title;
        $this->description = $portfolio->description;
        $this->category = $portfolio->category_id;
        $this->existingImageUrl = $portfolio->image_url;

        // opsi kategori
        $this->categories = Category::all();
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|max:2048', // 2MB
        ];
    }

    public function update()
    {
        $this->validate();

        $portfolio = Portfolio::findOrFail($this->portfolioId);

        // cek hak akses lagi (safety)
        if ($portfolio->user_id !== (Auth::id() ?? 0)) {
            abort(403);
        }

        // handle image upload bila ada
        if ($this->image) {
            // simpan image baru
            $newPath = $this->image->store('portfolio-images', 'public');

            // hapus gambar lama jika ada
            if ($portfolio->image_url && Storage::disk('public')->exists($portfolio->image_url)) {
                Storage::disk('public')->delete($portfolio->image_url);
            }

            $portfolio->image_url = $newPath;
        }

        // update fields
        $portfolio->title = $this->title;
        $portfolio->description = $this->description;
        $portfolio->category_id = $this->category;
        $portfolio->save();

        session()->flash('success', 'Portfolio berhasil diupdate!');
        // opsi: redirect ke halaman daftar atau tetap di edit
        return redirect()->route('portfolio.index'); // sesuaikan route
    }

    public function render()
    {
        return view('livewire.edit-portfolio');
    }
}
