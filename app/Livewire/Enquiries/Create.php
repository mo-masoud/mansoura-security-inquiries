<?php

namespace App\Livewire\Enquiries;

use App\Models\Enquiry;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

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
    public $car_type = 'ملاكي';
    public $car_brand;
    public $car_model;
    public $line;
    public $license_date;

    public $showLine = false;

    public function create($data)
    {
        $this->owner_image = $data['owner_image'] ?? null;
        $this->driver_image = $data['driver_image'] ?? null;

        $this->validate([
            'code' => 'required|string|max:255|unique:enquiries,code',
            'car_no' => 'required|string|max:255',
            'chassis_no' => 'required|string|max:255',
            'engine_no' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_address' => 'required|string|max:255',
            'owner_national_id' => 'required|string|size:14',
            'owner_phone_no' => 'required|string|min:11|max:11',
            // 'owner_image' => 'nullable|image|max:2048',
            'driver_name' => 'required|string|max:255',
            'driver_address' => 'required|string|max:255',
            'driver_national_id' => 'required|string|size:14',
            // 'driver_image' => 'nullable|image|max:2048',
            'car_type' => 'required|string|max:255',
            'car_brand' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'line' => 'required_if:car_type,ميكروباص,تاكسي,توكتوك|nullable|string|max:255',
            'license_date' => 'required|date',
        ]);

        if ($this->owner_image != null) {
            // covert base64 to image
            $owner_image_name = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->owner_image));
            $owner_image_path = 'storage/images/owner-' . Str::uuid()->toString() . '.png';

            if (!file_exists('storage/images')) {
                mkdir('storage/images', 0777, true);
            }

            file_put_contents($owner_image_path, $owner_image_name);
            $owner_image_path = str_replace('storage', 'public', $owner_image_path);
        } else {
            $owner_image_path = null;
        }

        if ($this->driver_image != null) {
            // covert base64 to image
            $driver_image_name = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->driver_image));
            $driver_image_path = 'storage/images/driver-' . Str::uuid()->toString() . '.png';

            if (!file_exists('storage/images')) {
                mkdir('storage/images', 0777, true);
            }

            file_put_contents($driver_image_path, $driver_image_name);
            $driver_image_path = str_replace('storage', 'public', $driver_image_path);
        } else {
            $driver_image_path = null;
        }

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

        // session()->flash('flash.bannerStyle', 'success');
        // session()->flash('flash.banner', 'تم إضافة الإستعلام رقم (' . $this->id . ') بنجاح');

        return redirect()->route('enquiries.print-preparing', $enquiry->id);
        // return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.enquiries.create');
    }
}
