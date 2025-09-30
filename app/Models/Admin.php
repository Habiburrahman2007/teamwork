<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class Admin extends Authenticatable implements FilamentUser
{
    use Notifiable;

    // jika tabel khusus
    protected $table = 'admins';

    public function canAccessPanel(Panel $panel): bool
    {
        return true; // atau logika cek lain
    }
}

