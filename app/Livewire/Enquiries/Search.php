<?php

namespace App\Livewire\Enquiries;

use App\Models\Enquiry;
use Livewire\Component;

class Search extends Component
{
    public $code;
    public $enquiry;

    public function search()
    {
        $this->validate([
            'code' => 'required|numeric|exists:enquiries,id',
        ], [
            'code.exists' => 'الكود غير موجود',
        ]);

        $this->enquiry = Enquiry::where('id', $this->code)
            ->first();
    }

    public function resetSearch()
    {
        $this->code = null;
        $this->enquiry = null;
    }

    public function render()
    {
        return view('livewire.enquiries.search');
    }
}
