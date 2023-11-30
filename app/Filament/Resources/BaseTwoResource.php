<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BaseTwoResource\Pages;
use App\Filament\Resources\BaseTwoResource\RelationManagers;
use App\Models\BaseTwo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BaseTwoResource extends Resource
{
    protected static ?string $model = BaseTwo::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?int $navigationSort = 2 ;

    protected static ?string $navigationGroup = 'Base de Donnee';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListBaseTwos::route('/'),
            'create' => Pages\CreateBaseTwo::route('/create'),
            'edit' => Pages\EditBaseTwo::route('/{record}/edit'),
        ];
    }
}
