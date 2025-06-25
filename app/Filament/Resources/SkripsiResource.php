<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Skripsi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\SkripsiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SkripsiResource\RelationManagers;
use Filament\Forms\Components\Select;
use App\Models\Mahasiswa;

class SkripsiResource extends Resource
{
    protected static ?string $model = Skripsi::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationLabel = 'Kelola Skripsi';
    protected static ?string $slug = 'data-skripsi';
    public static ?string $label = 'Data Skripsi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('KodeSkripsi')
                    ->required()
                    ->maxLength(3)
                    ->unique()
                    ->label('Kode Skripsi')
                    ->placeholder('Masukkan Kode Skripsi...'),
                TextInput::make('judul')
                    ->required()
                    ->unique()
                    ->label('Judul Skripsi')
                    ->placeholder('Masukkan Judul Skripsi...'),
                DateTimePicker::make('tanggalLulus')
                    ->required()
                    ->label('Tanggal Lulus')
                    ->minDate(now())
                    ->placeholder('Masukkan Tanggal Lulus...'),
                Select::make('nim')
                    ->relationship('mahasiswa', 'nim')
                    ->getOptionLabelFromRecordUsing(fn(Mahasiswa $record) => "{$record->nim} - {$record->nama}")
                    ->label('Nim Mahasiswa')
                    ->searchable()
                    ->preload()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('KodeSkripsi')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('berhasil disalin')
                    ->label('Kode Skripsi'),
                TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('berhasil disalin')
                    ->label('Judul Skripsi'),
                TextColumn::make('tanggalLulus')
                    ->searchable()
                    ->sortable()
                    ->label('Tanggal Lulus'),
                TextColumn::make('nim')
                    ->searchable()
                    ->sortable()
                    ->label('NIM'),
                TextColumn::make('mahasiswa.nim')
                    ->searchable()
                    ->sortable()
                    ->label('Nama'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSkripsis::route('/'),
            'create' => Pages\CreateSkripsi::route('/create'),
            'edit' => Pages\EditSkripsi::route('/{record}/edit'),
        ];
    }
}
