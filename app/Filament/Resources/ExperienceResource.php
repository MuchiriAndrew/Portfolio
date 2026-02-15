<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Experience';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('company')->required(),
                Forms\Components\TextInput::make('title')->label('Job title')->required(),
                Forms\Components\TextInput::make('role_tag')->label('Role tag (e.g. CTO)'),
                Forms\Components\TextInput::make('date_range')->label('Date range (e.g. Jan 2025 - Present)'),
                Forms\Components\TextInput::make('tech_stack')->label('Tech stack (comma-separated, e.g. Next.js, Vue.js, TypeScript)'),
                Forms\Components\RichEditor::make('description')
                    ->toolbarButtons(['bold', 'italic', 'underline', 'strike', 'link', 'bulletList', 'orderedList'])
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')->numeric()->default(0)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('date_range'),
                Tables\Columns\TextColumn::make('sort_order')->numeric()->sortable(),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()]),
            ])
            ->reorderable('sort_order')
            ->defaultSort('sort_order');
    }

    public static function canReorder(): bool
    {
        return true;
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
