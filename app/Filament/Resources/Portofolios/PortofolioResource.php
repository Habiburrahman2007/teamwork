<?php

namespace App\Filament\Resources\Portofolios;

use BackedEnum;
use App\Models\Portfolio;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\Portofolios\Pages\EditPortofolio;
use App\Filament\Resources\Portofolios\Pages\ViewPortofolio;
use App\Filament\Resources\Portofolios\Pages\ListPortofolios;
use App\Filament\Resources\Portofolios\Pages\CreatePortofolio;
use App\Filament\Resources\Portofolios\Schemas\PortofolioForm;
use App\Filament\Resources\Portofolios\Tables\PortofoliosTable;
use App\Filament\Resources\Portofolios\Schemas\PortofolioInfolist;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PortofolioForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PortofolioInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortofoliosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPortofolios::route('/'),
            'create' => CreatePortofolio::route('/create'),
            'view' => ViewPortofolio::route('/{record}'),
            'edit' => EditPortofolio::route('/{record}/edit'),
        ];
    }
}
