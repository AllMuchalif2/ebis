<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Kelola Mahasiswa';
    protected static ?string $slug = 'data-mahasiswa';
    public static ?string $label = 'Data Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nim')
                    ->required()
                    ->unique()
                    ->label('NIM')
                    ->placeholder('Masukkan NIM...'),
                TextInput::make('nama')
                    ->required()
                    ->label('NAMA')
                    ->placeholder('Masukkan Nama...'),
                TextInput::make('progdi')
                    ->required()
                    ->label('PROGDI')
                    ->placeholder('Masukkan Progdi...')
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
                TextColumn::make('nim')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('berhasil disalin')
                    ->label('NIM'),
                TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->label('NAMA'),
                TextColumn::make('progdi')
                    ->searchable()
                    ->sortable()
                    ->label('PROGDI')
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
