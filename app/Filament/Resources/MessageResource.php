<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        // Define schema here if needed for the view page
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->disabled()
                    ->label('Name'),
                Forms\Components\TextInput::make('email')
                    ->disabled()
                    ->label('Email'),
                Forms\Components\Textarea::make('message')
                    ->disabled()
                    ->label('Message'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('message'),
                TextColumn::make('created_at')->label('Sent At')->sortable(),
            ])
            ->filters([
                // Add any filters if needed
            ])
            ->actions([
                // Define actions if needed, but no edit or create actions
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
            // Comment out or remove create and edit routes
            // 'create' => Pages\CreateMessage::route('/create'),
            'view' => Pages\ViewMessage::route('/{record}'),
            // 'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
