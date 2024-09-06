<?php

namespace App\Filament\Resources\MessageResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\MessageResource;

class ViewMessage extends ViewRecord
{
    protected static string $resource = MessageResource::class;
    protected function getHeaderWidgets(): array
    {
        return [
            // Add any widgets you need for the header of the view page
        ];
    }

    protected function getActions(): array
    {
        return [];
    }
}
