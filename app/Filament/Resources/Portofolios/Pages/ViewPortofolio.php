<?php

namespace App\Filament\Resources\Portofolios\Pages;

use App\Filament\Resources\Portofolios\PortofolioResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPortofolio extends ViewRecord
{
    protected static string $resource = PortofolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
