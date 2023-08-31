<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Item;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ItemResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ItemResource\RelationManagers;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                Card::make()->schema([
                TextInput::make('item_code')->required()->autofocus(),
                TextInput::make('item_name')->required()->label(__('Description')),
                TextInput::make('category')->required(),
                TextInput::make('sub_category')->required(),
                Select::make('unit')->required()->options([
                    'kgs' => 'Kgs',
                    'pcs' => 'Pcs',
                    'gr' => 'gr',
                    'set' => 'Set',
                    'lot' => 'Lot',
                ]),
                TextInput::make('note'),
            ])
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')->getStateUsing(
                    static function ($rowLoop, HasTable $livewire): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->tableRecordsPerPage * (
                                $livewire->page - 1
                            ))
                        );
                    }
                ),
                TextColumn::make('item_code')->wrap()->color('secondary')->icon('heroicon-o-key'),
                TextColumn::make('item_name')->words(30),
                TextColumn::make('category')->wrap(),
                TextColumn::make('sub_category')->wrap(),
                TextColumn::make('unit')->wrap()->weight('bold')->fontFamily('mono'),
                TextColumn::make('note')->limit(15),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }    
}
