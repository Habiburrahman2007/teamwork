<?php

namespace App\Filament\Resources\Likes\Pages;

use App\Filament\Resources\Likes\LikeResource;
use App\Filament\Widgets\LikeWidget;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLikes extends ListRecords
{
    protected static string $resource = LikeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderwidgets(): array
    {
        return [
            LikeWidget::class
        ];
    }
}
