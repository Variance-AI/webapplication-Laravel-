<?php

namespace App\Exports;

use App\Models\Log;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LogFile implements FromCollection, WithHeadings
{
    public $__start__date;
    public $__end__date;
    public function __construct($__start__date, $__end__date)
    {
        $this->__start__date = $__start__date;
        $this->__end__date = $__end__date;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $__records = Log::whereBetween('created_at', [$this->__start__date, $this->__end__date])->get();
        return $__records;
    }
    public function headings(): array
    {
        return [
            'id',
            'requestName',
            'IP',
            'Status',
            'created_at',
            'updated_at',
        ];
    }
}
