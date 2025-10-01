<?php

namespace App\Filament\Resources\Portofolios\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;

class PortofoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image_url')
                    ->label('Image')
                    ->square(),
                BadgeColumn::make('category.name')
                    ->label('Category')
                    ->colors([
                        'success' => 'Nature',
                        'gray' => 'Vintage',
                        'warning' => 'Portrait',
                        'danger' => 'Wildlife',
                        'info' => 'Street',
                        'secondary' => 'Macro',
                        'primary' => 'Architecture',
                        'white' => 'Documentary',
                        'purple' => 'Astrography',
                        'pink' => 'Fashion',
                    ])
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Created By')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('likes_count')
                    ->label('Likes')
                    ->counts('likes')
                    ->sortable(),
                TextColumn::make('comments_count')
                    ->label('Comments')
                    ->counts('comments')
                    ->sortable(),
                TextColumn::make('created_date')
                    ->label('Created Date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Category')
                    ->relationship('category', 'name'),
                SelectFilter::make('user')
                    ->label('User')
                    ->relationship('user', 'name')
            ])
            ->recordActions([
                ActionGroup::make([
                ViewAction::make(),
                EditAction::make(),
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
