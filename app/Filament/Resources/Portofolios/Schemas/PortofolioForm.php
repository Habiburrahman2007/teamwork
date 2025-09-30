<?php

namespace App\Filament\Resources\Portofolios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class PortofolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255),
            Textarea::make('description')
                ->label('Description')
                ->rows(5),
            FileUpload::make('image_url')
                ->label('Image')
                ->image()
                ->directory('portofolios'),
            DatePicker::make('created_date')
                ->label('Created Date'),
            Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->searchable()
                ->required(),
            ]);
    }
}
