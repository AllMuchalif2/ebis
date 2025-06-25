<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dosen;
use App\Models\Skripsi;
use Filament\Forms\Form;
use App\Models\Pembimbing;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PembimbingResource\Pages;
use App\Filament\Resources\PembimbingResource\RelationManagers;

class PembimbingResource extends Resource
{
    protected static ?string $model = Pembimbing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('KodeSkripsi')
                    ->relationship('skripsi', 'KodeSkripsi')
                    ->getOptionLabelFromRecordUsing(fn(Skripsi $record) => "$record->judul")
                    ->label('Judul Skripsi')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('nidn')
                    ->relationship('dosen', 'nidn')
                    ->getOptionLabelFromRecordUsing(fn(Dosen $record) => "$record->nama")
                    ->label('Dosen Pembimbing')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('peran')
                    ->required()
                    ->maxLength(20)
                    ->label('Peran Pembimbing')
                    ->placeholder('Masukkan Peran Pembimbing...')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('skripsi.judul')
                    ->label('Judul Skripsi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dosen.nama')
                    ->label('Nama Dosen Pembimbing')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('peran')
                    ->label('Peran Pembimbing')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListPembimbings::route('/'),
            'create' => Pages\CreatePembimbing::route('/create'),
            'edit' => Pages\EditPembimbing::route('/{record}/edit'),
        ];
    }
}
