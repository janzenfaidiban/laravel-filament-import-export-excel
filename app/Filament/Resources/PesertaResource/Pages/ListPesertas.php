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

class ListPesertas extends ListRecords
{
    protected static string $resource = PesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('importPeserta')
                ->label('Import Peserta')
                ->color('danger')
                // ->icon('heroicon-o-document-download')
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
                })

        ];
    }
}
