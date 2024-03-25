<?php

namespace App\Livewire\Enquiries;

use App\Models\Enquiry;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $columns = [
            ['name' => 'الكود', 'field' => 'code'],
            ['name' => 'النوع', 'field' => 'car_type'],
            ['name' => 'رقم السيارة', 'field' => 'car_no'],
            ['name' => 'رقم الشاسية', 'field' => 'chassis_no'],
            ['name' => 'تاريخ الإنشاء', 'field' => 'created_at'],
        ];

        if (auth()->user()->type === 'employee') {
            $enquiries = Enquiry::where('user_id', auth()->id())
                ->when(request('today') == 1, function ($query) {
                    return $query->whereDate('created_at', today());
                })
                ->latest()
                ->paginate();
        } else {
            $enquiries = Enquiry::latest()
                ->when(request('today') == 1, function ($query) {
                    return $query->whereDate('created_at', today());
                })
                ->paginate();
        }


        return view('livewire.enquiries.table', compact('columns', 'enquiries'));
    }
}
