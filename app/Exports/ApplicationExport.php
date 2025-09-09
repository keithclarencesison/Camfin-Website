<?php

namespace App\Exports;

use App\Models\Loan;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ApplicationExport implements FromArray, WithHeadings, WithStyles
{
    protected $application;

    public function __construct(Loan $application)
    {
        $this->application = $application;
    }

    public function array(): array
    {
        return [
            [
                $this->application->id,
                trim($this->application->first_name . ' ' . ($this->application->middle_name ?? '') . ' ' . $this->application->last_name . ' ' . ($this->application->suffix ?? '')),
                $this->application->email,
                $this->application->mobile_number,
                $this->application->client_type,
                $this->application->date_of_birth,
                $this->application->created_at->format('M d, Y H:i'),
            ]
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Full Name',
            'Email',
            'Mobile Number',
            'Client Type',
            'Date of Birth',
            'Submitted At',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}