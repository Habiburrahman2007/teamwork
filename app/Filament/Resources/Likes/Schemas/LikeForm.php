<?php

namespace App\Filament\Resources\Likes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class LikeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable(),
                Select::make('portfolio_id')
                    ->relationship('portfolio', 'title')
                    ->required()
                    ->searchable(),
            ]);
    }
}
