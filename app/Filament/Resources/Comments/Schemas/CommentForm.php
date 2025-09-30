<?php

namespace App\Filament\Resources\Comments\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class CommentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Select::make('portfolio_id')
                    ->relationship('portfolio', 'title')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->rows(4),
            ]);
    }
}
