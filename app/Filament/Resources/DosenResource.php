<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Filament\Resources\DosenResource\RelationManagers;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Kelola Dosen';
    protected static ?string $slug = 'data-dosen';
    public static ?string $label = 'Data Dosen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nidn')
                    ->required()
                    ->unique()
                    ->label('Nomer Induk Dosen Nasional')
                    ->placeholder('Masukkan NIDN...')
                    ,
                    TextInput::make('nama')
                    ->required()
                    ->placeholder('Masukkan Nama...')
                    ->label('Nama'),
                    TextInput::make('keahlian')
                    ->required()
                    ->placeholder('Masukkan Bidang Keahlian...')
                    ->label('Bidang Keahlian'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('nidn')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('berhasil disalin')
                    ->label('NIDN'),
                TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->label('Nama'),
                TextColumn::make('keahlian')
                    ->searchable()
                    ->sortable()
                    ->label('Keahlian')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                
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
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
        ];
    }
}
