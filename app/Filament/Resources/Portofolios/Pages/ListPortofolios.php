<?php

namespace App\Filament\Resources\Portofolios\Pages;

use App\Filament\Resources\Portofolios\PortofolioResource;
use App\Filament\Widgets\PotfolioWidget;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPortofolios extends ListRecords
{
    protected static string $resource = PortofolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderwidgets(): array
    {
        return [
            PotfolioWidget::class
        ];
    }
}
