<?php

namespace App\Filament\Resources\PesertaResource\Pages;

use App\Filament\Resources\PesertaResource;
use App\Imports\PesertaImport;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Psy\VersionUpdater\Downloader\FileDownloader;

class ListPesertas extends ListRecords
{
    protected static string $resource = PesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah')
                ->icon('heroicon-o-user-plus'),

            Action::make('importPeserta')
                ->label('Import Data Peserta')
                ->color('gray')
                ->icon('heroicon-o-arrow-up-on-square')
                ->form([
                    FileUpload::make('attachment'),
                ])
                ->action(function(array $data) {
                    $file = public_path('storage/'. $data['attachment']);
                    Excel::import(new PesertaImport, $file);

                    Notification::make()
                        ->title('Peserta Imported')
                        ->success()
                        ->send();
                }),

            Action::make('downloadImportTemplate')
                ->label('Download Template')
                ->color('gray')
                ->icon('heroicon-o-table-cells')
                ->url('../templates/template-data-kelulusan.xlsx'),

        ];
    }
}
