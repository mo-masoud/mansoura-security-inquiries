<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Update extends Component
{
    public $id;

    public $name;

    public $username;

    public $password;

    public function mount($id)
    {
        $this->id = $id;

        $user = User::findOrFail($id);

        $this->name = $user->name;
        $this->username = $user->username;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:50|alpha_num|unique:users,username,' . $this->id,
            'password' => 'nullable|string|max:30|min:8'
        ]);

        $user = User::findOrFail($this->id);

        $user->update([
            'name' => $this->name,
            'username' => $this->username,
            'password' => $this->password ? bcrypt($this->password) : $user->password
        ]);

        session()->flash('flash.bannerStyle', 'success');
        session()->flash('flash.banner', 'تم تعديل الموظف بنجاح');

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.users.update');
    }
}
