<?php

namespace App\Filament\Resources;

use App\Exports\PesertaExport;
use App\Filament\Resources\PesertaResource\Pages;
use App\Filament\Resources\PesertaResource\RelationManagers;
use App\Models\Peserta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class PesertaResource extends Resource
{
    protected static ?string $model = Peserta::class;

    protected static ?string $navigationGroup = 'Data Lulusan';

    protected static ?string $navigationLabel = 'Peserta';

    protected static ?string $navigationBadgeTooltip = 'Jumlah Peserta';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $exportIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenjang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('npsn')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_sekolah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('orang_tua')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_peserta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_tanggal_lahir')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('tempat_lahir')
                //     ->maxLength(255)
                //     ->default(null),
                // Forms\Components\DatePicker::make('tanggal_lahir'),
                Forms\Components\TextInput::make('tahun_lulus'),
                Forms\Components\TextInput::make('nomor_ujian')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('nomor_ijazah')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenjang')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('npsn')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('nama_sekolah')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('orang_tua')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('nama_peserta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_tanggal_lahir')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('tempat_lahir')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('tanggal_lahir')
                //     ->date()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('tahun_lulus'),
                Tables\Columns\TextColumn::make('nomor_ujian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_ijazah')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
                SelectFilter::make('jenjang')
                    ->options([
                        'SD' => 'SD',
                        'SMP' => 'SMP',
                        'SMA' => 'SMA',
                        'SMK' => 'SMK',
                        'PAKET-A' => 'PAKET-A',
                        'PAKET-B' => 'PAKET-B',
                        'PAKET-C' => 'PAKET-C',
                    ]),

                SelectFilter::make('tahun_lulus')
                    ->options([
                        '2018' => '2018',
                        '2019' => '2019',
                        '2020' => '2020',
                        '2021' => '2021',
                        '2022' => '2022',
                        '2023' => '2023',
                        '2024' => '2024',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    BulkAction::make('export')
                    ->label('Export data ke Excel')
                    ->icon('heroicon-o-arrow-down-on-square')
                    ->action(function(Collection $records) {
                        return Excel::download(new PesertaExport($records), 'peserta.xlsx');
                    })
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
            'index' => Pages\ListPesertas::route('/'),
            'create' => Pages\CreatePeserta::route('/create'),
            'edit' => Pages\EditPeserta::route('/{record}/edit'),
        ];
    }
}
