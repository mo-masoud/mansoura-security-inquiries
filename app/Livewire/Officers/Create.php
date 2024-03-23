<?php

namespace App\Livewire\Officers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    #[Validate('required|max:255')]
    public $name;

    #[Validate('required|max:50|alpha_num|unique:users,username')]
    public $username;

    #[Validate('required|string|max:30|min:8')]
    public $password;

    public function create()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'type' => 'officer'
        ]);

        session()->flash('flash.bannerStyle', 'success');
        session()->flash('flash.banner', 'تم إضافة الظابط بنجاح');

        return redirect()->route('officers.index');
    }

    public function render()
    {
        return view('livewire.officers.create');
    }
}
