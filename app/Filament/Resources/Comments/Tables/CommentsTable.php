<?php

namespace App\Filament\Resources\Comments\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class CommentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('User')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('portfolio.title')
                    ->label('Portfolio')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('content')
                    ->limit(50),
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
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
                ActionGroup::make([
                ViewAction::make(),
                //EditAction::make(),
                DeleteAction::make(),
            ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
