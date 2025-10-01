<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CommentWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Comments', Comment::count())
                ->description('Total user comments')
                ->icon('heroicon-o-chat-bubble-left-right'),
        ];
    }
}
