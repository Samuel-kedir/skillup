<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseSyllabusResource\Pages;
use App\Filament\Resources\CourseSyllabusResource\RelationManagers;
use App\Models\Category;
use App\Models\CourseSyllabus;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseSyllabusResource extends Resource
{
    protected static ?string $model = CourseSyllabus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(40),
            TextInput::make('slug')
                ->required()
                ->unique(CourseSyllabus::class, 'slug', ignoreRecord: true)
                ->maxLength(20),
            FileUpload::make('course_icon')
                ->image(),
            FileUpload::make('course_hero_image')
                ->image(),
            DatePicker::make('start_date')
                ->required(),
            TextInput::make('duration')
                ->required()
                ->maxLength(30),
            TextInput::make('fee')
                ->numeric()
                ->required(),
            TextInput::make('live_session_time')
                ->required()
                ->maxLength(30),
            TextInput::make('detailed_syllabus_title')
                ->required()
                ->maxLength(50),
            RichEditor::make('detailed_syllabus_content')
                ->required(),
            TextInput::make('about_course_title')
                ->required()
                ->maxLength(50),
            RichEditor::make('about_course_detail')
                ->required(),
            Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->preload()
                ->createOptionForm(function () {
                    return [
                        TextInput::make('name')
                            ->required()
                            ->label('Category Name'),
                        RichEditor::make('description')
                        ->label('Category Description'),
                        TextInput::make('discount')
                        ->label('Discounted Price')
                        ->numeric()
                        ->prefix('$')
                        ->maxValue(10000)
                    ];
                })

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('fee')->money('USD'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCourseSyllabi::route('/'),
            'create' => Pages\CreateCourseSyllabus::route('/create'),
            'edit' => Pages\EditCourseSyllabus::route('/{record}/edit'),
        ];
    }
}
