<?php

namespace App\Livewire\Enquiries;

use App\Models\Enquiry;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $code;
    public $car_no;
    public $chassis_no;
    public $engine_no;
    public $owner_name;
    public $owner_address;
    public $owner_national_id;
    public $owner_phone_no;
    public $owner_image;
    public $driver_name;
    public $driver_address;
    public $driver_national_id;
    public $driver_image;
    public $car_type;
    public $car_brand;
    public $car_model;
    public $line;
    public $license_date;

    public function create()
    {
        $this->validate([
            'code' => 'required|numeric|min:1|unique:enquiries,code',
            'car_no' => 'required|string|max:255',
            'chassis_no' => 'required|string|max:255',
            'engine_no' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_address' => 'required|string|max:255',
            'owner_national_id' => 'required|string|size:14',
            'owner_phone_no' => 'required|string|min:11|max:11',
            'owner_image' => 'required|image|max:1024',
            'driver_name' => 'required|string|max:255',
            'driver_address' => 'required|string|max:255',
            'driver_national_id' => 'required|string|size:14',
            'driver_image' => 'required|image|max:1024',
            'car_type' => 'required|string|max:255',
            'car_brand' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'line' => 'required|string|max:255',
            'license_date' => 'required|date',
        ]);

        $owner_image_path = $this->owner_image->store('public/images');
        $driver_image_path = $this->driver_image->store('public/images');

        $enquiry = Enquiry::create([
            'code' => $this->code,
            'car_no' => $this->car_no,
            'chassis_no' => $this->chassis_no,
            'engine_no' => $this->engine_no,
            'owner_name' => $this->owner_name,
            'owner_address' => $this->owner_address,
            'owner_national_id' => $this->owner_national_id,
            'owner_phone_no' => $this->owner_phone_no,
            'owner_image' => $owner_image_path,
            'driver_name' => $this->driver_name,
            'driver_address' => $this->driver_address,
            'driver_national_id' => $this->driver_national_id,
            'driver_image' => $driver_image_path,
            'car_type' => $this->car_type,
            'car_brand' => $this->car_brand,
            'car_model' => $this->car_model,
            'line' => $this->line,
            'license_date' => $this->license_date,
            'user_id' => auth()->id(),
        ]);

        session()->flash('flash.bannerStyle', 'success');
        session()->flash('flash.banner', 'تم إضافة الإستعلام رقم (' . $this->code . ') بنجاح');

        return redirect()->route('enquiries.print-preparing', $enquiry->id);
        // return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.enquiries.create');
    }
}
