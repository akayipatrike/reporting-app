<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BaseOneResource\Pages;
use App\Filament\Resources\BaseOneResource\RelationManagers;
use App\Models\BaseOne;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BaseOneResource extends Resource
{
    protected static ?string $model = BaseOne::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?int $navigationSort = 1 ;

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
            'index' => Pages\ListBaseOnes::route('/'),
            'create' => Pages\CreateBaseOne::route('/create'),
            'edit' => Pages\EditBaseOne::route('/{record}/edit'),
        ];
    }
}
