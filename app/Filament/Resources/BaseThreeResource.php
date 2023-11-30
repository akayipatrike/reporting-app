<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BaseThreeResource\Pages;
use App\Filament\Resources\BaseThreeResource\RelationManagers;
use App\Models\BaseThree;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BaseThreeResource extends Resource
{
    protected static ?string $model = BaseThree::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?int $navigationSort = 3 ;

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
            'index' => Pages\ListBaseThrees::route('/'),
            'create' => Pages\CreateBaseThree::route('/create'),
            'edit' => Pages\EditBaseThree::route('/{record}/edit'),
        ];
    }
}
