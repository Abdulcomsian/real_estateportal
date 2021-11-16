<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Lead;

class LeadExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Lead::select('address', 'markete_location', 'ask_price', 'price_per_door', 'gross_revenue', 'noi', 'cap_rate', 'occupancy', 'asset_class', 'pro_forma', 'renovations', 'broker_contact')->get();
    }
    public function headings(): array
    {
        return [
            'Address',
            'Markete Location',
            'Ask Price',
            'Price Per Door',
            'Gross Revenue',
            'Noi',
            'Cap Rate',
            'Occupancy',
            'Asset Class',
            'Pro Forma',
            'Renovations',
            'Broker Contact'
        ];
    }
}
