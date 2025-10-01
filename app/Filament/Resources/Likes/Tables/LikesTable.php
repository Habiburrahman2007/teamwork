<?php

namespace App\Filament\Resources\Likes\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class LikesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('portfolio.title')
                    ->label('Portfolio')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                SelectFilter::make('user')
                    ->label('User')
                    ->relationship('user', 'name'),
                SelectFilter::make('portfolio')
                    ->label('Portfolio')
                    ->relationship('portfolio', 'title'),
            ])
            ->recordActions([
                //DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //DeleteBulkAction::make(),
                ]),
            ]);
    }
}
