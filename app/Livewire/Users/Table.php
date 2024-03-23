<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Table extends Component
{
    public $confirmingDeletion = false;
    public $deletedId = null;

    public function confirmDeletion($id)
    {
        $this->confirmingDeletion = true;
        $this->deletedId = $id;
    }

    public function delete()
    {
        User::find($this->deletedId)->delete();
        $this->confirmingDeletion = false;
        $this->deletedId = null;

        session()->flash('flash.bannerStyle', 'success');
        session()->flash('flash.banner', 'تم حذف الموظف بنجاح');

        return redirect()->route('users.index');
    }

    public function render()
    {
        $columns = [
            ['name' => 'ID', 'field' => 'id'],
            ['name' => 'الاسم', 'field' => 'name'],
            ['name' => 'اسم المستخدم', 'field' => 'username'],
            ['name' => 'تاريخ الإنشاء', 'field' => 'created_at'],
            ['name' => 'التحكم', 'field' => 'actions', 'actions' => ['edit', 'delete']],
        ];

        $users = User::where('type', 'employee')->latest()->paginate();
        return view('livewire.users.table', compact('columns', 'users'));
    }
}
