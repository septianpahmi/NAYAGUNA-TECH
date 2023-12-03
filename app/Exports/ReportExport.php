<?php

namespace App\Exports;
use App\Models\Kategori;
use App\Models\Kwitansi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return [
            'No',
            'Nomor',
            'Dari',
            'Hal',
            'Peserta',
            'Terbilang',
            'Penerima',
            'Materi',
            'Created_at',
            'Updated_at',
        ];
    }
}
